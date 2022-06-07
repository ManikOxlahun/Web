<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

EnviaMail("asd","asd","asd");

function EnviaMail($Destino,$Asunto,$Mensaje){
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'c2091346.ferozo.com';                   // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'info@wisee.com.ar';              // SMTP username
        $mail->Password = 'DonRamon21';                           // SMTP password
        $mail->SMTPSecure = false;
        $mail->SMTPAutoTLS = false;                          // Enable TLS encryption, `ssl` also accepted
        $mail->Port =25;                                    // TCP port to connect to
        $mail->CharSet = 'UTF-8';
        $mail->header =("Content-type: text/html;  charset=utf-8");
        //Recipients
        $mail->setFrom('info@wisee.com.ar', 'Meelux - Centro de Alertas');          //This is the email your form sends From
        //$mail->addAddress($Destino, 'Usuario'); // Add a recipient address
        $mail->addAddress('mauombalbis@gmail.com');               // Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
    
        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    
        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $Asunto;
        $mail->Body    = $Mensaje;
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        //echo 'Message has been sent';
    } catch (Exception $e) {
        //echo 'Message could not be sent.';
        //echo 'Mailer Error: ' . $mail->ErrorInfo;
    }    

}
?>