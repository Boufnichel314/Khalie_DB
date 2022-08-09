<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $email = $_POST['email'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'boufnichelboufnichel314157@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'vuejgxzzhtyzhyez'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('boufnichelboufnichel314157@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress($email); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Contact Khalia)';
    $mail->Body = "Votre message a été bien envoyé à Khalie Ahl Fes <br> Merci pour votre temps !";

    $mail->send();
    $alert = '<div class="alert-success">
    <span class="closebtn" onclick="this.parentElement.style.display=\'none\';"><i class="fas fa-times"></i></span>
                 <span>Message Envoye, Merci pour votre temps.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
    <span class="closebtn" onclick="this.parentElement.style.display=\'none\';"><i class="fas fa-times"></i></span>
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>
