<?php
require_once 'recaptch_key.php';

$name = strip_tags( trim( $_REQUEST['name'] ));
$company = strip_tags( trim( $_REQUEST['company'] ));
$phone = strip_tags( trim( $_REQUEST['phone'] ));
$email = strip_tags( trim( $_REQUEST['email'] ));
$msg = htmlentities ( trim ( $_REQUEST['message'] ) , ENT_NOQUOTES );

$sent_from = "no-reply@abattoir-software.com";
$reply_to = "no-reply@abattoir-software.com";

$headers = 'From: ' . $sent_from . "\r\n" .
		'Reply-To: ' . $reply_to . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

$send_to = "contact@abattoir-software.com";

if($_REQUEST['g-recaptcha-response']!=="") {
	$message = "Message from: " . $name . "\n";
	$message .= "Contact Email: " . $email . "\n";
	if($company!="") {
		$message .= "Company: " . $company . "\n";
	}
	if($phone!="") {
		$message .= "Phone: " . $phone . "\n";
	}
	$message .= $msg;
	
	// Send to Contact
	mail($send_to,"Contact Form from $name <$email>", $message, $headers);
	
	// Send to sender
	mail($email,"Your message to Abattoir Software has been sent","Thank you for contacting us. Your message was sent to Abattoir Software. Someone should respond within 72 hours. \n\n--- Copy of message ---\n\n" . $message, $headers);

	echo "PASSED";
} else {
	echo "RECAPTCHA FAILED";
}
?>