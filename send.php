<?php

 $ima = $_POST['ima'];
 $email = $_POST['email'];
 $tel = $_POST['tel'];
 $qvest = $_POST['qvest'];
 
 $ima = htmlspecialchars($ima);
  $email = htmlspecialchars($email);
   $tel = htmlspecialchars($tel);
   $qvest = htmlspecialchars($qvest);
   
   $ima = urldecode($ima);
  $email = urldecode($email);
   $tel = urldecode($tel);
   $qvest = urldecode($qvest);
   
   $ima = trim($ima);
  $email = trim($email);
   $tel = trim($tel);
   $qvest = trim($qvest);

if (mail("burdak.gleb@gmail.com",
"Новое письмо с сайта",
"Имя:".$ima."\n".
"Email:".$email."\n".
"Телефон:".$tel."\n"
"Вопрос:".$qvest,
"From: no-reply@ydomain.ru \r \n")
) {
	echo ('Письмо успешно отправлено!');
}
else {
	echo ('Есть ошибки, проверьте данные...');
}
?>