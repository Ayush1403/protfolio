<?php
//get data from form  

$name = $_POST['firstname lastname'];
$email= $_POST['Email'];
$message= $_POST['Subject'];
$to = "ayushsrivastava742@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@ayush.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thank.html");
?>