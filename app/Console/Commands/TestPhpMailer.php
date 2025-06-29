<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class TestPhpMailer extends Command
{
    protected $signature = 'phpmailer:test {--to=test@example.com} {--debug}';
    protected $description = 'Test PHPMailer configuration';

    public function handle()
    {
        $this->info('Iniciando teste de PHPMailer...');

        $mail = new PHPMailer(true);

        try {
            // Configurações do servidor
            $mail->isSMTP();
            $mail->Host = 'sandbox.smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Port = 2525;
            $mail->Username = '9b07350d950878';
            $mail->Password = '362eb6acfe0b1e';
            $mail->SMTPSecure = env('MAIL_ENCRYPTION', 'tls');
            $mail->Port       = env('MAIL_PORT', 2525);

            // Debug opcional
            if ($this->option('debug')) {
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            }

            // Configurações do email
            $mail->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $mail->addAddress($this->option('to'));

            // Conteúdo
            $mail->isHTML(true);
            $mail->Subject = 'Teste PHPMailer - Laravel';
            $mail->Body    = $this->getHtmlBody();
            $mail->AltBody = strip_tags($this->getHtmlBody());

            // Enviar
            $mail->send();

            $this->info('✓ Email enviado com sucesso!');
            $this->table(
                ['Configuração', 'Valor'],
                [
                    ['Host', env('MAIL_HOST')],
                    ['Porta', env('MAIL_PORT')],
                    ['Encryption', env('MAIL_ENCRYPTION')],
                    ['De', env('MAIL_FROM_ADDRESS')],
                    ['Para', $this->option('to')]
                ]
            );

        } catch (Exception $e) {
            $this->error("✗ Erro ao enviar email: {$mail->ErrorInfo}");
            $this->error("Detalhes: {$e->getMessage()}");

            if ($this->confirm('Deseja ver as configurações atuais?')) {
                $this->showCurrentConfig();
            }
        }
    }

    private function getHtmlBody()
    {
        return '
            <h2>Teste de Email PHPMailer</h2>
            <p>Este email foi enviado através do PHPMailer integrado ao Laravel.</p>
            <ul>
                <li>Data: ' . now()->format('d/m/Y H:i:s') . '</li>
                <li>Ambiente: ' . app()->environment() . '</li>
                <li>Laravel: ' . app()->version() . '</li>
            </ul>
        ';
    }

    private function showCurrentConfig()
    {
        $this->table(
            ['Variável', 'Valor'],
            [
                ['MAIL_MAILER', env('MAIL_MAILER', 'não definido')],
                ['MAIL_HOST', env('MAIL_HOST', 'não definido')],
                ['MAIL_PORT', env('MAIL_PORT', 'não definido')],
                ['MAIL_USERNAME', env('MAIL_USERNAME', 'não definido')],
                ['MAIL_PASSWORD', env('MAIL_PASSWORD') ? '***' : 'não definido'],
                ['MAIL_ENCRYPTION', env('MAIL_ENCRYPTION', 'não definido')],
                ['MAIL_FROM_ADDRESS', env('MAIL_FROM_ADDRESS', 'não definido')],
            ]
        );
    }
}
