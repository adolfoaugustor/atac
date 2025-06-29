<?php

namespace App\Services;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class PhpMailerService
{
    private $mail;

    public function __construct()
    {
        $this->mail = new PHPMailer(true);
        $this->configure();
    }

    private function configure()
    {
        $this->mail->isSMTP();
        $this->mail->Host       = env('MAIL_HOST');
        $this->mail->SMTPAuth   = true;
        $this->mail->Username   = env('MAIL_USERNAME');
        $this->mail->Password   = env('MAIL_PASSWORD');
        $this->mail->SMTPSecure = env('MAIL_ENCRYPTION', 'tls');
        $this->mail->Port       = env('MAIL_PORT', 587);
        $this->mail->CharSet    = 'UTF-8';

        // Configuração padrão do remetente
        $this->mail->setFrom(
            env('MAIL_FROM_ADDRESS'),
            env('MAIL_FROM_NAME')
        );
    }

    public function send($to, $subject, $body, $isHtml = true)
    {
        try {
            $this->mail->clearAddresses();
            $this->mail->addAddress($to);
            $this->mail->Subject = $subject;

            if ($isHtml) {
                $this->mail->isHTML(true);
                $this->mail->Body = $body;
                $this->mail->AltBody = strip_tags($body);
            } else {
                $this->mail->Body = $body;
            }

            return $this->mail->send();

        } catch (Exception $e) {
            throw new \Exception("Erro ao enviar email: " . $this->mail->ErrorInfo);
        }
    }

    public function getMail()
    {
        return $this->mail;
    }
}
