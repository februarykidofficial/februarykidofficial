<?php
	if (empty($_POST['imie_xs']) && strlen($_POST['imie_xs']) == 0 || empty($_POST['email_xs']) && strlen($_POST['email_xs']) == 0 || empty($_POST['wiadomosc_xs']) && strlen($_POST['wiadomosc_xs']) == 0)
	{
		return false;
	}
	
	$imie_xs = $_POST['imie_xs'];
	$email_xs = $_POST['email_xs'];
	$wiadomosc_xs = $_POST['wiadomosc_xs'];
	
	// Create Message	
	$to = 'alternaxxofficial@gmail.com';
	$email_subject = "Message from Alternaxx Website";
	$email_body = "You have received a new message. \n\nImie_Xs: $imie_xs \nEmail_Xs: $email_xs \nWiadomosc_Xs: $wiadomosc_xs \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yourmail.com\r\n";
	$headers .= "Reply-To: $email_xs";

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