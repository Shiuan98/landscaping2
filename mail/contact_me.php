<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['phone']) 		||
   empty($_POST['service']) 		||
   empty($_POST['address']) 		||
   empty($_POST['message'])	||
   
	
$name = $_POST['name'];
$phone = $_POST['phone'];
$service = $_POST['service'];
$address = $_POST['address'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'woeishiuan@rubysoft.com.my'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Landscaping Service Contact Form";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nPhone: $phone\n\nService: $service\n\nAddress: $address\n\nMessage:\n$message";
$headers = "From: noreply@Landscaping-Service.com.my"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>