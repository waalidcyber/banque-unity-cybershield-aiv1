<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

function send_email ($to, $subject, $body){
    $mail = new PHPMailer(true);

    try {

        $mail->isSMTP();                                           
        $mail->Host       = 'smtp.gmail.com';  
        $mail->SMTPAuth   = true;                                  
        $mail->Username   = 'erkhissabrar@gmail.com'; 
        $mail->Password   = 'zsgo ejgc zqkr ohoz';    
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;    
        $mail->setFrom('erkhissabrar@gmail.com', 'Shine');
        $mail->addAddress($to); 
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $body;
          return $mail->send();
    } catch (Exception $e) {

        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        return false;
    }

}
?>