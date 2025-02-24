<?php
	if (empty($_POST['name_lg_38417']) && strlen($_POST['name_lg_38417']) == 0 || empty($_POST['email_lg_38417']) && strlen($_POST['email_lg_38417']) == 0 || empty($_POST['message_lg_38417']) && strlen($_POST['message_lg_38417']) == 0)
	{
		return false;
	}
	
	$name_lg_38417 = $_POST['name_lg_38417'];
	$email_lg_38417 = $_POST['email_lg_38417'];
	$message_lg_38417 = $_POST['message_lg_38417'];
	
	// Create Message	
	$to = 'alternaxxofficial@gmail.com';
	$email_subject = "Message from Alternaxx Website";
	$email_body = "You have received a new message. \n\nName_Lg_38417: $name_lg_38417 \nEmail_Lg_38417: $email_lg_38417 \nMessage_Lg_38417: $message_lg_38417 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@alternaxx.com\r\n";
	$headers .= "Reply-To: $email_lg_38417";

	// Post Message
	if (function_exists('mail'))
	{
		$result = mail($to,$email_subject,$email_body,$headers);
	}
	else // Mail() Disabled
	{
		$error = array("message" => "The php mail() function is not available on this server.");
	    header('Content-Type: application/json');
	    http_response_code(500);
	    echo json_encode($error);
	}	
?>