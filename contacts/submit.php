<?php
if (!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['message'])){

  $headers = 'From: ... ...\r\n'.
             'Reply-To: ...@...\r\n'.
             'X-Mailer: PHP/'. phpversion();

  $theme = 'Терези: Нове повідомлення';

  $letter = 'Данні повідомлення:';
  $letter .="\n\n";
  $letter .="\nІм`я: ".$_POST['name'];
  $letter .="\nEmail: ".$_POST['email'];
  $letter .="\nТелефон: ".$_POST['phone'];
  $letter .="\nПовідомлення: ".$_POST['message'];

  if (mail("zoooka492@gmail.com", $theme, $letter)){
    header("Location:/contacts/thankyou.html");
  } else{
    header("Location:/contacts/error.html");
  }
} else {
  header("Location:/contacts/error.html");
}
