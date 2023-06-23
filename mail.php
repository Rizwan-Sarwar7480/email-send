<?php
//get data from form  
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "rizwansarwarwar@gmail.com";
$subject = "Mail From website";
$txt = "Name = " . $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: frontend.creatics2@gmail.com";
if ($email != NULL) {
    mail($to, $subject, $txt, $headers);
}
//redirect
header("Location:thankyou.html");
