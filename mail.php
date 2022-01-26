<?php
//get data from form  
$name = $_POST['name'];
$name = $_POST['name'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email= $_POST['email'];
$message= $_POST['text'];

$to = "adeebrazi22@gmail.com";

$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message . "\r\n Mobile Number =" . $phone;

$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: adi.leader26@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
    header("Location:thankyou.html");
}
//redirect
//
?>