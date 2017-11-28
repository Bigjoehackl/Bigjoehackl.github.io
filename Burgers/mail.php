<?php
$name = $_POST['name'];
$email = $_POST['email'];
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$name = urldecode($name);
$email = urldecode($email);
$name = trim($name);
$email = trim($email);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("slangtr@yandex.ru", "Заявка с сайта", "Имя:".$name." ".$email ,"From: slangtr@yandex.ru \r\n"))
 {     echo "сообщение успешно отправлено"; 
} else { 
    echo "при отправке сообщения возникли ошибки";
}?>