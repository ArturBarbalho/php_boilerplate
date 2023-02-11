<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//require('../../vendor/autoload.php');
//require('../config.php');

class Mailer{
    public function send($destinatary,$subject,$body){
       $mail = new PHPMailer(true); 
       try { 
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                    
        $mail->isSMTP();                                            
        $mail->Host       = MAIL_HOST;                    
        $mail->SMTPAuth   = true;                                  
        $mail->Username   = MAIL_USER;                     
        $mail->Password   = MAIL_PASS;                               
        $mail->SMTPSecure = 'tsl';           
        $mail->Port       = MAIL_PORT;                                  
    
        //Recipients
        $mail->setFrom(MAIL_USER, MAIL_NAME);
        $mail->addAddress($destinatary, '');  
    
        //Attachments
   /*   $mail->addAttachment('/var/tmp/file.tar.gz');         
        $mail->addAttachment('/tmp/image.jpg', 'new.jpg');   */
    
        //Content
        $mail->isHTML(true);                                  
        $mail->Subject = $subject;
        $mail->Body    = $body;
    
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    }
}