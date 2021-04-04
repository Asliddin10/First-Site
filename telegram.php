<?php

/* https://api.telegram.org/bot1629776045:AAEKsRizWrqEYDm1Z9wtxlQuwimiw2FWFdk/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$token = "1629776045:AAEKsRizWrqEYDm1Z9wtxlQuwimiw2FWFdk";
$chat_id = "-516249325";
$arr = array(
  'User Name: ' => $name,
  'Mobile Phone: ' => $phone,
  'Email Address' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>