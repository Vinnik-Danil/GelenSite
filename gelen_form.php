<?php

/* https://api.telegram.org/bot5140124058:AAGLhmUXiE8PGxJm72TOQwHGdF9CsDwgTxk/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['userName'];
$phone = $_POST['userPhone'];
$email = $_POST['userEmail'];
$subject = $_POST['userMsg'];

$token = "5140124058:AAGLhmUXiE8PGxJm72TOQwHGdF9CsDwgTxk";
$chat_id = "-708595078";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email: ' => $email,
  'Сообщение' => $subject
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};
/*------*/
if ($name == '') {
    if($phone == ''){
          if($email == ''){
            header('Location: index.html');
            // echo 'Не заполнены поля все поля!';
          }
        }
      
    
    
}else{
/*----*/ 
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
}
if ($sendToTelegram) {
  header('Location: index.html');
} 
?>