<?php
include_once 'includes/altcha-autoload.php';
include_once 'includes/altcha-settings.php';

$referer = $_SERVER["HTTP_REFERER"];

if(str_contains($referer,"abattoir-software.com/contact")) {
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

	error_log("POST: " . print_r($_POST,true));

	$data = $_POST["altcha"] ?? "";

	$result = true;
	$altcha = new AltchaOrg\Altcha\Altcha($captcha_key);
	// decode what the widget sent in base64
	$decoded = json_decode(base64_decode($data), true);
	// error_log("DECODED: ". print_r($decoded,true));
	// error_log("KEY: ". $captcha_key);

	if($decoded==false) {
		error_log("FAILED TO DECODE!!");
		// Can't decode captcha, fail it!
		$result = false;
	} else {
		// Verify the solution
		$ok = $altcha->verifySolution($decoded, $captcha_key);

		// if($ok===true) { error_log(" OK === True "); }
		// if($ok==true) { error_log(" OK == True "); }
		// if($ok===false) { error_log(" OK === False "); }
		// if($ok==false) { error_log(" OK == False "); }

		// error_log("Altch OK: [[" . $ok . "]]");
		// error_log("OK: [[" . print_r($ok,true) . "]]");
		if($ok==false) {
			$result = false;
		}
	}
	$captcha_success = $result;

	if ($captcha_success==false) {
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
		mail($email,"Your message to Abattoir Software has been sent","Thank you for contacting us. Your message was sent to Abattoir Software. Someone should respond within 1-2 business days. \n\n--- Copy of message ---\n\n" . $message, $headers);

		echo "PASSED";
	}
}
?>
