<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';   
    $mail->SMTPAuth   = true;
    $mail->Username   = 'amir.f.fanari@gmail.com';  // Your Gmail
    $mail->Password   = 'exwn udra iobt fykf';  // Use an App Password, NOT your real password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587; 

    // Recipients
    $mail->setFrom('amir.f.fanari@gmail.com', 'Amir Fanari');
    $mail->addAddress('firasfanari963@gmail.com', 'Firas Fanari'); 

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Test Email from PHPMailer';
    $mail->Body    = 'Hello Firas, this is a test email from PHPMailer!';

    $mail->send();
    echo 'Message has been sent successfully';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
