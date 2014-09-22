<?php
/*
* contact form class
*/

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

 $to = 'inphomercial@gmail.com';
 $subject = 'Coffeepod Form Message';
 $message = 'Message: '.$message;
 $headers = 'From: '.$email. "\r\n";

  if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
	mail($to, $subject, $message, $headers); //This method sends the mail.
	$response['status'] = 1;	
	$response['html'] = "Thank you!";
	echo json_encode($response);
  	// echo "Your email was sent!"; // success message
  }else{
	$response['html'] = "Invalid Email";
	$response['status'] = 0;
	echo json_encode($response);
  	// echo "Invalid Email, please provide an correct email.";
  }
// ?>
