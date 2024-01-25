<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Create a new PHPMailer instance
// Crear nueva instancia PHPMailer
$mail = new PHPMailer(true);

try {
    // Server configuration
    // Configuración del servidor
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'email';
    $mail->Password = 'applicationPassword';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Recipients
    // Recipientes
    $mail->setFrom('alanrod88@gmail.com', 'Your Name');
    $mail->addAddress('recipient1@example.com', 'Recipient 1');
    $mail->addAddress('recipient2@example.com', 'Recipient 2');

    // Content
    // Contenido
    $mail->isHTML(true);
    $mail->Subject = 'Your Subject';
    $mail->Body    = 'Your HTML message here';

    // Send the email
    // Eviar el email
    $mail->send();
    echo 'Email sent successfully';
} catch (Exception $e) {
    echo "Error: {$mail->ErrorInfo}";
}
?>

