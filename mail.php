<?php
//get data from form

$name = $_POST['name'];
$email= $_POST['email'];
$user_subject = $_POST['subject'];
$message= $_POST['message'];
$to = "animeshkansal01@gmail.com";

$subject = "Mail from your website "


$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n subject = " . $user_subject . "\r\n Message =" . $message;
$headers = "From: animesh9807.github.io/portfolio" . "\r\n" .
"CC: ";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:https://animesh9807.github.io/portfolio");
?>
