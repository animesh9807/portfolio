<?php
//get data from form

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "animeshkansal01@gmail.com";

$subject = "Mail from your website ";


$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n subject = " . $user_subject . "\r\n Message =" . $message;
$headers = "From: animesh9807@gmail.com" . "\r\n" .
"CC: ";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location : index.html");
?>
