<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
 $to = "pal74089@gmil.com";
 $subject = "Mail from website";

 $headers = "From:" .$name. "\r\n". 

 $txt ="YOU HAVE RECIVED AN E-MAIL FROM" .$name ."\r\n Email:" .$email ."\r\n
 Message:" .$message;

 if($email!= NULL){
    mail($to, $subject, $txt, $headers);

 }
 header('Location: thanks.html');
 ?>