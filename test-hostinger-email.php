<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    // Configurações do servidor
    $mail->isSMTP();
    $mail->Host       = 'smtp.hostinger.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'site@atac-assessoriacontabil.com.br';
    $mail->Password   = '2025@Atac';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    // Debug detalhado
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;

    // Configurações do remetente
    $mail->setFrom('site@atac-assessoriacontabil.com.br', 'ATAC Assessoria');
    $mail->addAddress('adolfoaugustor@gmail.com', 'Teste');

    // Conteúdo
    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Subject = 'Teste de Email - Hostinger';
    $mail->Body    = 'Este é um teste de envio via Hostinger SMTP';

    $mail->send();
    echo 'Email enviado com sucesso!';
} catch (Exception $e) {
    echo "Erro ao enviar: {$mail->ErrorInfo}";
}
