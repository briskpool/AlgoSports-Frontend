<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (!empty($_POST['g-recaptcha-response'])) {
  $secret = '6LcksvsbAAAAAHBMG1xxL6h2kAb2gqTv2mBt-XFF';
  $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
  $responseData = json_decode($verifyResponse);
  if ($responseData->success) {
    if (isset($_POST['sendmsg'])) {



      require_once "vendor/autoload.php";

      $f_name = $_POST['f_name'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $msg = $_POST['msg'];




      $mail = new PHPMailer(true);

      //Enable SMTP debugging.
      //   $mail->SMTPDebug = 3;                     
      //Set PHPMailer to use SMTP.

      $mail->isSMTP();

      //Set SMTP host name                          
      $mail->Host = "mail.blockchainalgorithms.co";
      //Set this to true if SMTP host requires authentication to send email
      $mail->SMTPAuth = true;
      //Provide username and password     
      $mail->Username = "info@blockchainalgorithms.co";
      $mail->Password = "NK6545A1305DJ/";
      //If SMTP requires TLS encryption then set it
      $mail->SMTPSecure = "tls";
      //Set TCP port to connect to
      $mail->Port = 587;
      $mail->From = "info@blockchainalgorithms.co";
      $mail->FromName = "Contact - Blockchain Algorithms";
      $mail->addAddress("info@blockchainalgorithms.co");


      $mail->isHTML(true);

      $mail->Subject = $subject;

      $mailContent = file_get_contents('templates/mail.php');
      $mailContent = str_replace('{{email}}', $email, $mailContent);
      $mailContent = str_replace('{{f_name}}',  $f_name, $mailContent);
      $mailContent = str_replace('{{msg}}',  $msg, $mailContent);

      $mail->Body = $mailContent;

      if ($mail->send()) {
        $_SESSION['success'] = "We appreciate you reaching out to us and we'll be in touch soon at Blockchain Algorithms.";
        // header('Location: https://blockchainalgorithms.co/index.php#contact-us');
        // echo "email sent";
      } else {
        $_SESSION['fail'] = "Something went wrong.";
        // header('Location: https://blockchainalgorithms.co/index.php#contact-us');
      }
    } else if (isset($_POST['register'])) {



      require_once "vendor/autoload.php";

      $f_name = $_POST['f_name'];
      $l_name = $_POST['l_name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];




      $mail = new PHPMailer(true);

      //Enable SMTP debugging.
      //   $mail->SMTPDebug = 3;                     
      //Set PHPMailer to use SMTP.

      $mail->isSMTP();

      //Set SMTP host name                          
      $mail->Host = "mail.blockchainalgorithms.co";
      //Set this to true if SMTP host requires authentication to send email
      $mail->SMTPAuth = true;
      //Provide username and password     
      $mail->Username = "info@blockchainalgorithms.co";
      $mail->Password = "NK6545A1305DJ/";
      //If SMTP requires TLS encryption then set it
      $mail->SMTPSecure = "tls";
      //Set TCP port to connect to
      $mail->Port = 587;
      $mail->From = "info@blockchainalgorithms.co";
      $mail->FromName = "Blockchain Algorithms";
      $mail->addAddress("info@blockchainalgorithms.co");


      $mail->isHTML(true);

      $mail->Subject = "Registration Request";

      $mailContent = file_get_contents('templates/register_mail.php');
      $mailContent = str_replace('{{f_name}}',  $f_name, $mailContent);
      $mailContent = str_replace('{{l_name}}',  $l_name, $mailContent);
      $mailContent = str_replace('{{email}}', $email, $mailContent);
      $mailContent = str_replace('{{phone}}',  $phone, $mailContent);

      $mail->Body = $mailContent;

      if ($mail->send()) {
        $_SESSION['success'] = "We appreciate you reaching out to us and we'll be in touch soon at Blockchain Algorithms.";
        // header('Location: https://blockchainalgorithms.co/index.php#contact-us');
        // echo "email sent";
      } else {
        $_SESSION['fail'] = "Something went wrong.";
        // header('Location: https://blockchainalgorithms.co/index.php#contact-us');
      }
    }
  }
} else {
  $_SESSION['fail'] = "Please Fill Captcha";
}
