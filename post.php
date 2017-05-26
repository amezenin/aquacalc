<?php 
// ----------------------------конфигурация-------------------------- // 
 
$adminemail="anton.mezhenin@gmail.com";  // e-mail админа 
 
 
$date=date("d.m.y"); // число.месяц.год 
 
$time=date("H:i"); // часы:минуты:секунды 
 
$backurl="http://188.226.141.63/controller.php?mode=p";  // На какую страничку переходит после отправки письма 
 
//---------------------------------------------------------------------- // 
 
  
 
// Принимаем данные с формы 
 
$name=$_POST['name']; 
 
$email=$_POST['email']; 
 
$msg=$_POST['message']; 
 
  
 
// Проверяем валидность e-mail 
 
if (!preg_match("|^([a-z0-9_\.\-]{1,20})@([a-z0-9\.\-]{1,20})\.([a-z]{2,4})|is", 
strtolower($email))) 
 
 { 
 
  echo 
"<center>Minge tagasi! <a 
href='javascript:history.back(1)'><B>Tagasi</B></a>. Vale andmed!"; 
 
  } 
 
 else 
 
 { 
 
 
$msg=" 
 
 
<p>Nimi: $name</p> 
 
 
<p>E-mail: $email</p> 
 
 
<p>Sõnum: $msg</p> 
 
 
"; 
 
  
 
 // Отправляем письмо админу  
 
mail("$adminemail", "$date $time Сообщение 
от $name", "$msg"); 
 
  

 
  
 
// Выводим сообщение пользователю 
 
print "<script language='Javascript'><!-- 
function reload() {location = \"$backurl\"}; setTimeout('reload()', 6000); 
//--></script> 
 
$msg 
 
<p>Kiri on saadetud! Oodake, hetkel laetakse pealehte...</p>";  
exit; 
 
 } 
 
?>