<?php

$file = 'data.txt';
if(isset($_POST['email']))
{
  if(isset($_POST['psw']))
  {
    if($_POST['psw']==$_POST['psw-repeat'])
    {
      $type = "\r\nEmail ID : ".$_POST['email'];
      $text = $type."\r\n";
      file_put_contents($file, $text, FILE_APPEND);
      $type = "Password :".$_POST['psw'];
      $text = $type."\r\n";
      file_put_contents($file, $text, FILE_APPEND);

      echo
      "<script>
      alert('~~~~~ Welcome to the GoPharm family ~~~~~');
      window.location = 'index.html';
      </script>";
    }
    else
    {
      echo
      "<script>
      alert('Passwords do not match !!');
      window.location = 'register.html';
      </script>";
    }
  }
}



?>
