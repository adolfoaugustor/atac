<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Rules\ReCAPTCHAv3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\IpUtils;

class ContactController extends Controller
{
    public function index()
    {
        $page = Voyager::model('Page')->where('slug', 'fale-conosco')
            ->where('status','=', 'ACTIVE')->firstOrFail();

        return view('fale-conosco', ['page' => $page]);
    }

    public function store(Request $request)
    {
        if( env('APP_ENV') == 'production' ){
            $this->validRecaptcha($request);
        }

        // Verificar se o campo honeypot foi preenchido (indicando um bot)
        if ($request->filled('website')) {
            Log::warning('Possível bot detectado via honeypot', [
                'ip' => $request->ip(),
                'user_agent' => $request->header('User-Agent')
            ]);

            // Simular sucesso para o bot
            return redirect()->back()
                ->with(['success' => 'Obrigado por entrar em contato conosco. Entraremos em contato em breve.']);
        }

        // Verificar se o IP está bloqueado
        if (Contact::isIpBlocked($request->ip())) {
            Log::warning('IP bloqueado tentando enviar formulário', [
                'ip' => $request->ip()
            ]);

            return redirect()->back()
                ->with(['error' => 'Muitas solicitações foram detectadas. Por favor, tente novamente mais tarde.']);
        }

        // Verificar se o email está bloqueado
        if ($request->filled('email') && Contact::isEmailBlocked($request->input('email'))) {
            Log::warning('Email bloqueado tentando enviar formulário', [
                'email' => $request->input('email'),
                'ip' => $request->ip()
            ]);

            return redirect()->back()
                ->with(['error' => 'Muitas solicitações foram detectadas. Por favor, tente novamente mais tarde.']);
        }

        // Validação (mantida do código anterior)
        Validator::make($request->all(),[
            'nome' => 'required|min:5|max:100|regex:/^[\pL\s\-]+$/u',
            'email' => 'required|email:rfc,dns',
            'celular' => 'required|regex:/^[\d\s-]{10,20}$/',
            'assunto' => 'nullable|max:100|string',
            'mensagem' => 'required|min:5|max:2000|string',
        ],[
            'nome.regex' => 'O nome deve conter apenas letras, espaços e hífens.',
            'celular.regex' => 'O celular deve conter apenas números, espaço ou hífen. (10-20 dígitos).',
            'mensagem.max' => 'A mensagem não pode exceder 2000 caracteres.',
        ]);

        // Preparar dados com informações adicionais
        $input = [
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'celular' => $request->input('celular'),
            'assunto' => $request->input('assunto'),
            'mensagem' => $request->input('mensagem'),
            'ip_address' => $request->ip(),
            'user_agent' => $request->header('User-Agent')
        ];

        try {
            // Verificar taxa de requisições (rate limiting)
            if ($this->isSpamming($request)) {
                Log::warning('Possível tentativa de spam detectada', [
                    'ip' => $request->ip(),
                    'user_agent' => $request->header('User-Agent')
                ]);

                return redirect()->back()
                    ->with(['error' => 'Muitas solicitações em um curto período. Por favor, aguarde alguns minutos antes de tentar novamente.'])
                    ->withInput($request->except(['website']));
            }

            // Sanitizar e salvar no banco de dados
            $sanitizedData = Contact::sanitizeData($input);
            Contact::create($sanitizedData);

            // Enviar email com PHPMailer
            $this->sendEmailWithPHPMailer($sanitizedData);

            // Registrar sucesso
            Log::info('Contato processado com sucesso', [
                'email' => $sanitizedData['email'],
                'ip' => $request->ip()
            ]);

            return redirect()->back()
                ->with(['success' => 'Obrigado por entrar em contato conosco. Entraremos em contato em breve.']);

        } catch (\Exception $e) {
            // Log do erro
            Log::error('Erro ao processar contato: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString(),
                'input' => $input
            ]);

            return redirect()->back()
                ->with(['error' => 'Houve um erro ao processar sua solicitação. Por favor, tente novamente.'])
                ->withInput($request->except(['website']));
        }
    }

    /**
     * Verifica se o usuário está enviando muitas requisições em um curto período
     */
    private function isSpamming(Request $request)
    {
        $ip = $request->ip();
        $cacheKey = 'contact_form_' . md5($ip);

        // Se já existir uma entrada para este IP nos últimos 60 segundos
        if (cache()->has($cacheKey)) {
            $attempts = cache()->get($cacheKey);

            // Permitir no máximo 3 tentativas em 5 minutos
            if ($attempts >= 3) {
                return true;
            }

            cache()->put($cacheKey, $attempts + 1, now()->addMinutes(5));
        } else {
            // Primeira tentativa
            cache()->put($cacheKey, 1, now()->addMinutes(5));
        }

        return false;
    }

    private function sendEmailWithPHPMailer($data)
    {
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = env('MAIL_HOST');
            $mail->SMTPAuth   = true;
            $mail->Username   = env('MAIL_USERNAME');
            $mail->Password   = env('MAIL_PASSWORD');
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = env('MAIL_PORT');

            // Importante: Considere habilitar a verificação em produção
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => env('APP_ENV') === 'production',
                    'verify_peer_name' => env('APP_ENV') === 'production',
                    'allow_self_signed' => env('APP_ENV') !== 'production'
                )
            );

            $mail->Timeout = 60;
            $mail->setFrom(env('MAIL_USERNAME'), env('MAIL_FROM_NAME'));
            $mail->addAddress(env('MAIL_ADMIN_ADDRESS'), env('MAIL_ADMIN_NAME'));
            $mail->addReplyTo($data['email'], $data['nome']);

            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';
            $mail->Subject = 'Contato via Site: ' . htmlspecialchars($data['assunto'] ?? 'Sem assunto');

            // Template HTML
            $mail->Body = $this->getEmailTemplate($data);

            // Versão texto
            $mail->AltBody = $this->getPlainTextEmail($data);

            $mail->send();

            Log::info('Email enviado com sucesso', [
                'to' => env('MAIL_ADMIN_ADDRESS'),
                'from' => $data['email']
            ]);

        } catch (Exception $e) {
            Log::error('Erro ao enviar email', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            throw $e;
        }
    }

    private function getEmailTemplate($data)
    {
        // Se você tiver uma view blade para o email
        if (view()->exists('emails.contact')) {
            return view('emails.contact', [
                'nome' => htmlspecialchars($data['nome']),
                'email' => htmlspecialchars($data['email']),
                'celular' => htmlspecialchars($data['celular']),
                'assunto' => htmlspecialchars($data['assunto'] ?? 'Não informado'),
                'mensagem' => nl2br(htmlspecialchars($data['mensagem']))
            ])->render();
        }

        // Template HTML padrão com dados sanitizados
        $nome = htmlspecialchars($data['nome']);
        $email = htmlspecialchars($data['email']);
        $celular = htmlspecialchars($data['celular']);
        $assunto = htmlspecialchars($data['assunto'] ?? 'Não informado');
        $mensagem = nl2br(htmlspecialchars($data['mensagem']));

        return "
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                .header { background-color: #f4f4f4; padding: 20px; text-align: center; }
                .content { padding: 20px; }
                .field { margin-bottom: 15px; }
                .label { font-weight: bold; color: #333; }
                .value { color: #666; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h2>Novo Contato do Site</h2>
                </div>
                <div class='content'>
                    <div class='field'>
                        <span class='label'>Nome: {$nome}</span>
                    </div>
                    <div class='field'>
                        <span class='label'>Email: {$email}</span>
                    </div>
                    <div class='field'>
                        <span class='label'>Celular: {$celular}</span>
                    </div>
                    <div class='field'>
                        <span class='label'>Assunto: {$assunto}</span>
                    </div>
                    <div class='field'>
                        <span class='label'>Mensagem:</span>
                        <p class='value'>{$mensagem}</p>
                    </div>
                </div>
            </div>
        </body>
        </html>
        ";
    }

    private function getPlainTextEmail($data)
    {
        $nome = $data['nome'];
        $email = $data['email'];
        $celular = $data['celular'];
        $assunto = $data['assunto'] ?? 'Não informado';
        $mensagem = $data['mensagem'];

        return "
            Novo Contato do Site
            ====================

            Nome: {$nome}
            Email: {$email}
            Celular: {$celular}
            Assunto: {$assunto}

            Mensagem:
            {$mensagem}
        ";
    }

    public function validRecaptcha($request)
    {
        $recaptcha = $request->input('g-recaptcha-response');

        if (is_null($recaptcha)) {
            $request->session()->flash('message', "Por favor complete o captcha.");
            return redirect()->back();
        }

        $url = "https://www.google.com/recaptcha/api/siteverify";

        $params = [
            'secret' => config('services.recaptcha.secret_key'),
            'response' => $recaptcha,
            'remoteip' => IpUtils::anonymize($request->ip())
        ];
        try {

            $response = Http::asForm()->post($url, $params);
            $result = json_decode($response);

            return ($response->successful() && $result->success == true);

        } catch (Exception $e) {
            throw new Exception("Captcha inválido, preencha novamente o captcha!", 304);
        }
    }
}
