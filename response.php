<?php
//get data from form  
$first= $_POST['name'];
$last= $_POST['last'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$address= $_POST['address'];
$message= $_POST['message'];
$to = "support@rjraghavgroup.com";
$subject = "Mail From website";
$txt ="first = ". $first . "\r\n  last = " . $last . "\r\n email =" . $email . "\r\n  phone = " . $phone . "\r\n  address = " . $address . "\r\n  message = " . $message .;
$headers = "From: support@RJRaghavGroup.com" . "\r\n" .
"CC:";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>