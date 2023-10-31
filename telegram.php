<?php

$name = $_POST['form[name]'];
$type = $_POST['form[type]'];
$email = $_POST['form[email]'];
$description = $_POST['form[description]'];
$token = "5614536157:AAGKKMvx9yzMgu1YunGvPsvnW2audWnotbk";
$chat_id = "-980053984";
$arr = array(
  'Имя пользователя: ' => $name,
  'Тип: ' => $type,
  'Email' => $email
  'Описание' => $description
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");


?>