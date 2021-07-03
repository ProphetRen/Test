<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'phpmailer/src/Exception.php';
  require 'phpmailer/src/PHPMailer.php';

  $mail = new PHPMailer(true);
  $mail->CharSet = 'UTF-8';
  $mail->SetLanguage('ru', 'phpmailer/language/');
  $mail->IsHTML(true);

  $mail->SetForm('master.two228@yandex.ru','User88');
  $mail->addAddress('master.one228@yandex.ru');
  $mail->Subject = 'Данные о стуле :3';

  if(trim(!empty($_POST['name']))){
    $body.='<p><strong>Имя:</strong> '.$_POST['name'].'</p>';
  }
  if(trim(!empty($_POST['number']))){
    $body.='<p><strong>Телефон:</strong> '.$_POST['number'].'</p>';
  }
  if(trim(!empty($_POST['email']))){
    $body.='<p><strong>email:</strong> '.$_POST['email'].'</p>';
  }
  if(trim(!empty($_POST['thing_call']))){
    $body.='<p><strong>Название товара:</strong> '.$_POST['thing_call'].'</p>';
  }

  $mail->body =$body;

  if(!$mail->send()){
    $message = 'Ошибка';
  }else{
    $message = 'Данные отправлены!';
  }

  $response = ['message' =>$message];
  header('Content-type: application/json');
  echo json_encode($response);

?>