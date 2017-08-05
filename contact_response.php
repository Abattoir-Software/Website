<?php
require_once 'recaptch_key.php';

$name = strip_tags( trim( $_POST['name'] ));
$company = strip_tags( trim( $_POST['company'] ));
$phone = strip_tags( trim( $_POST['phone'] ));
$email = strip_tags( trim( $_POST['email'] ));
$msg = htmlentities ( trim ( $_POST['message'] ) , ENT_NOQUOTES );

$sent_from = "no-reply@abattoir-software.com";
$reply_to = "no-reply@abattoir-software.com";
$send_to = "contact@abattoir-software.com";
$headers = 'From: ' . $sent_from . "\r\n" .
		'Reply-To: ' . $reply_to . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

$response =  $_POST["g-recaptcha-response"];

$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array(
	'secret'   => $RECAPTCH_KEY,
	'response' => $response
);
$options = array(
	'http' => array (
		'method' => 'POST',
		'content' => http_build_query($data)
	)
);
$context  = stream_context_create($options);
$verify = file_get_contents($url, false, $context);
$captcha_success=json_decode($verify);

if ($captcha_success->success==false) {
	echo "RECAPTCHA FAILED";
} else {
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
}
?>