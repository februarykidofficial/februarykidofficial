<?php
	if (empty($_POST['name_xs_2869']) && strlen($_POST['name_xs_2869']) == 0 || empty($_POST['email_xs_2869']) && strlen($_POST['email_xs_2869']) == 0 || empty($_POST['message_xs_2869']) && strlen($_POST['message_xs_2869']) == 0)
	{
		return false;
	}
	
	$name_xs_2869 = $_POST['name_xs_2869'];
	$email_xs_2869 = $_POST['email_xs_2869'];
	$message_xs_2869 = $_POST['message_xs_2869'];
	
	// Create Message	
	$to = 'alternaxxofficial@gmail.com';
	$email_subject = "Message from Alternaxx Website";
	$email_body = "You have received a new message. \n\nName_Xs_2869: $name_xs_2869 \nEmail_Xs_2869: $email_xs_2869 \nMessage_Xs_2869: $message_xs_2869 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yourmail.com\r\n";
	$headers .= "Reply-To: $email_xs_2869";

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