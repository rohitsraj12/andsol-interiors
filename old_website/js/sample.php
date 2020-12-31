<?php
if(empty($_POST['subject']) || 
   empty($_POST['fname'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['msg'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
   
$subject = $_POST['subject'];
$name = $_POST['fname'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$msg = $_POST['msg'];
	
$to = 'harsha.k.rudrappa@gmail.com';
$email_subject = "Mail From harsha.k.rudrappa@gmail.com:  $name"; 
$email_body = "You have received a new message from your website's contact form.\n\n"."Here are the details:\n\nName: $subject\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@your-domain.com\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?> 