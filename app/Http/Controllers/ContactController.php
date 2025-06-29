<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Log;
use TCG\Voyager\Facades\Voyager;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class ContactController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $page = Voyager::model('Page')->where('slug', 'fale-conosco')
            ->where('status','=', 'ACTIVE')->firstOrFail();

        return view('fale-conosco', ['page' => $page]);
    }

    /**
     * Store contact form data and send email
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|min:5|max:100',
            'email' => 'required|email',
            'celular' => 'required|numeric',
            'mensagem' => 'required|min:5'
        ]);

        $input = $request->all();

        try {
            // Salvar no banco de dados
            Contact::create($input);

            // Enviar email com PHPMailer
            $this->sendEmailWithPHPMailer($input);

            return redirect()->back()
                ->with(['success' => 'Obrigado por entrar em contato conosco. Entraremos em contato em breve.']);

        } catch (\Exception $e) {
            // Log do erro
            Log::error('Erro ao processar contato: ' . $e->getMessage());

            return redirect()->back()
                ->with(['error' => 'Houve um erro ao processar sua solicitação. Por favor, tente novamente.'])
                ->withInput();
        }
    }

    /**
     * Send email using PHPMailer
     *
     * @param array $data
     * @return void
     * @throws Exception
     */
    private function sendEmailWithPHPMailer($data)
    {
        $mail = new PHPMailer(true);

        try {
            // Configurações do servidor
            $mail->isSMTP();
            $mail->Host       = env('MAIL_HOST', 'smtp.mailtrap.io');
            $mail->SMTPAuth   = true;
            $mail->Username   = env('MAIL_USERNAME');
            $mail->Password   = env('MAIL_PASSWORD');
            $mail->SMTPSecure = env('MAIL_ENCRYPTION', 'tls');
            $mail->Port       = env('MAIL_PORT', 2525);

            // Configuração de charset para suportar acentuação
            $mail->CharSet = 'UTF-8';

            // Remetente
            $mail->setFrom($data['email'], $data['nome']);
            $mail->addReplyTo($data['email'], $data['nome']);

            // Destinatário
            $mail->addAddress('adolfoaugustor@gmail.com', 'Admin');

            // Conteúdo do email
            $mail->isHTML(true);
            $mail->Subject = $data['assunto'] ?? 'Novo contato do site';

            // Corpo do email em HTML
            $mail->Body = $this->getEmailTemplate($data);

            // Corpo alternativo em texto simples
            $mail->AltBody = $this->getPlainTextEmail($data);

            $mail->send();

        } catch (Exception $e) {
            throw new \Exception("Erro ao enviar email: {$mail->ErrorInfo}");
        }
    }

    /**
     * Get HTML email template
     *
     * @param array $data
     * @return string
     */
    private function getEmailTemplate($data)
    {
        // Se você tiver uma view blade para o email
        if (view()->exists('emails.contact')) {
            return view('emails.contact', $data)->render();
        }

        // Template HTML padrão
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
                        <span class='label'>Nome:</span>
                        <span class='value'>{$data['nome']}</span>
                    </div>
                    <div class='field'>
                        <span class='label'>Email:</span>
                        <span class='value'>{$data['email']}</span>
                    </div>
                    <div class='field'>
                        <span class='label'>Celular:</span>
                        <span class='value'>{$data['celular']}</span>
                    </div>
                    <div class='field'>
                        <span class='label'>Assunto:</span>
                        <span class='value'>" . ($data['assunto'] ?? 'Não informado') . "</span>
                    </div>
                    <div class='field'>
                        <span class='label'>Mensagem:</span>
                        <p class='value'>" . nl2br(htmlspecialchars($data['mensagem'])) . "</p>
                    </div>
                </div>
            </div>
        </body>
        </html>
        ";
    }

    /**
     * Get plain text email content
     *
     * @param array $data
     * @return string
     */
    private function getPlainTextEmail($data)
    {
        return "
    Novo Contato do Site
    ====================

    Nome: {$data['nome']}
    Email: {$data['email']}
    Celular: {$data['celular']}
    Assunto: " . ($data['assunto'] ?? 'Não informado') . "

    Mensagem:
    {$data['mensagem']}
        ";
    }
}
