<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (!empty($_POST['g_recaptcha_response'])) {
  $secret = '6LcInm8dAAAAAPxoqi_3ZsrSdqadvy6JfTWzGw_8';
  $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g_recaptcha_response']);
  $responseData = json_decode($verifyResponse);
  if ($responseData->success) {
    if ($_POST['form']=='contact') {



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
      $mail->Host = "sxb1plmcpnl486574.prod.sxb1.secureserver.net";
      //Set this to true if SMTP host requires authentication to send email
      $mail->SMTPAuth = true;
      //Provide username and password     
      $mail->Username = "info@algosportsgroup.com";
      $mail->Password = "Manchester2021";
      //If SMTP requires TLS encryption then set it
      $mail->SMTPSecure = "tls";
      //Set TCP port to connect to
      $mail->Port = 587;
      $mail->From = "info@algosportsgroup.com";
      $mail->FromName = "AlgoSports Group";
      // $mail->addAddress("mudassirkhan.uoh@gmail.com");
      $mail->addAddress("info@algosportsgroup.com");


      $mail->isHTML(true);

      $mail->Subject = $subject;

      $mailContent = file_get_contents('templates/mail.php');
      $mailContent = str_replace('{{email}}', $email, $mailContent);
      $mailContent = str_replace('{{f_name}}',  $f_name, $mailContent);
      $mailContent = str_replace('{{msg}}',  $msg, $mailContent);

      $mail->Body = $mailContent;

      if ($mail->send()) {
        echo 'success';
        // http_response_code(201);
      } else {
          http_response_code(201);
      }
    } else if ($_POST['form']=='register') {

      

      require_once "vendor/autoload.php";

      $f_name = $_POST['f_name'];
      $l_name = $_POST['l_name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];


      $mail = new PHPMailer(true);

      //Enable SMTP debugging.
        // $mail->SMTPDebug = 3;                     
      //Set PHPMailer to use SMTP.

      $mail->isSMTP();

      //Set SMTP host name                          
      $mail->Host = "sxb1plmcpnl486574.prod.sxb1.secureserver.net";
      //Set this to true if SMTP host requires authentication to send email
      $mail->SMTPAuth = true;
      //Provide username and password     
      $mail->Username = "info@algosportsgroup.com";
      $mail->Password = "Manchester2021";
      //If SMTP requires TLS encryption then set it
      $mail->SMTPSecure = "tls";
      //Set TCP port to connect to
      $mail->Port = 587;
      $mail->From = "info@algosportsgroup.com";
      $mail->FromName = "AlgoSports Group";
      $mail->addAddress("info@algosportsgroup.com");
      // $mail->addAddress("mudassirkhan.uoh@gmail.com");


      $mail->isHTML(true);

      $mail->Subject = "Registration Request";

      $mailContent = file_get_contents('templates/register_mail.php');
      $mailContent = str_replace('{{f_name}}',  $f_name, $mailContent);
      $mailContent = str_replace('{{l_name}}',  $l_name, $mailContent);
      $mailContent = str_replace('{{email}}', $email, $mailContent);
      $mailContent = str_replace('{{phone}}',  $phone, $mailContent);

      $mail->Body = $mailContent;

      if ($mail->send()) {
        echo 'success';
        // http_response_code(201);
      } else {
          http_response_code(201);
      }
    }
  }
} else {
  echo 'captcha-error';
}


