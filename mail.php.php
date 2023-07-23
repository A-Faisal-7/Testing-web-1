<?php
//get data from form  
$name = $_POST['name:'];
$phone= $_POST['phone:'];
$email= $_POST['email:'];
$name = $_POST['ref.name:'];
$phone= $_POST['ref.phone:'];
$message= $_POST['message:'];
$to = "mohamedfaisalkms@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  phone = " . $phone . "\r\n Email = " . $email . "\r\n ref.name = " . $name . 
"\r\n ref.phone = " . $phone . "\r\n Message =" . $message.";
$headers = "From: newmsg@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
