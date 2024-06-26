<?php



$POST['name'];
$_POST['mail'];
$_POST['msg'];

htmlspecialchars($mail);
urldecode($mail);
trim($mail);

$name = trim(urldecode(htmlspecialchars($name)));
$mail = trim(urldecode(htmlspecialchars($mail)));
$msg = trim(urldecode(htmlspecialchars($msg)));

mail("markpro709@gmail.com", "Новый запрос на создание сайта",
"<h1>На вашем сайте была оставлена заявка</h1>",
"From: 1c-webdevelopment.ru\r\n". "Content-type: text/html\r\n",
"<h1>На вашем сайте была оставлена заявка</h1>
<br>от: </b>" .$name."</b>
<br>пользователь оставил коментарий: ".$msg."
<br>Поздравляю с новой заявкой</br>");

if(mail("ofspecialk@ya.ru" , "Новый запрос на создание сайта",
"<br>От: <b>" .$name." </b>",
"<br>email: <b>" .$mail." </b>",
"<br>коментарий: <b>" .$msg." </b>",
"From: 1c-webdevelopment.ru\r\n". "Content-type: text/html\r\n"))
{
    echo '{"status": "ok"}';
}else{
    echo '{"status": "error"}';
}








?>