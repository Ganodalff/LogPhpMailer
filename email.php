<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'lib/vendor/autoload.php';


function s_email($email,$titulo,$conteudo){
$mail = new PHPMailer(true);
    try{
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                    
        $mail->isSMTP();                                            
        $mail->Host       = 'smtp.gmail.com';                    
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = 'email';       #seu email              
        $mail->Password   = 'pass';        #sua senha             
        $mail->SMTPSecure = 'tls';            
        $mail->Port       = 587;                                   

        $mail->setFrom('email@example.com', 'example');
        $mail->addAddress($email);                
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
       	//$mail->addBCC('bcc@example.com');

        $mail->isHTML(true);                                 
        $mail->Subject = $titulo;
        $mail->Body    = $conteudo;

        $mail->send();
    	echo 'Message has been sent <br>';
    	} catch (Exception $e) {
        echo "Message could not be sent <br>";
    }
}
?>