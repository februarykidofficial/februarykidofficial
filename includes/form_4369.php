<?php
	if (empty($_POST['name_md_4369']) && strlen($_POST['name_md_4369']) == 0 || empty($_POST['email_md_4369']) && strlen($_POST['email_md_4369']) == 0 || empty($_POST['message_md_4369']) && strlen($_POST['message_md_4369']) == 0)
	{
		return false;
	}
	
	$name_md_4369 = $_POST['name_md_4369'];
	$email_md_4369 = $_POST['email_md_4369'];
	$message_md_4369 = $_POST['message_md_4369'];
	
	// Create Message	
	$to = 'alternaxxofficial@gmail.com';
	$email_subject = "Message from Alternaxx Website";
	$email_body = "You have received a new message. \n\nName_Md_4369: $name_md_4369 \nEmail_Md_4369: $email_md_4369 \nMessage_Md_4369: $message_md_4369 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yourmail.com\r\n";
	$headers .= "Reply-To: $email_md_4369";

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