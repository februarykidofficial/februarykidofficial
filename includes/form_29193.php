<?php
	if (empty($_POST['imie_lg']) && strlen($_POST['imie_lg']) == 0 || empty($_POST['email_lg']) && strlen($_POST['email_lg']) == 0 || empty($_POST['wiadomosc_lg']) && strlen($_POST['wiadomosc_lg']) == 0)
	{
		return false;
	}
	
	$imie_lg = $_POST['imie_lg'];
	$email_lg = $_POST['email_lg'];
	$wiadomosc_lg = $_POST['wiadomosc_lg'];
	
	// Create Message	
	$to = 'alternaxxofficial@gmail.com';
	$email_subject = "Message from Alternaxx Website";
	$email_body = "You have received a new message. \n\nImie_Lg: $imie_lg \nEmail_Lg: $email_lg \nWiadomosc_Lg: $wiadomosc_lg \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yourmail.com\r\n";
	$headers .= "Reply-To: $email_lg";

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