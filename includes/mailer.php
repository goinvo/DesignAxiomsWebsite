<?php

if(isset($_POST['submit'])) {
	//Check to make sure that the name field is not empty
	if(trim($_POST['name']) == 'Name' || trim($_POST['name']) == '') {
		$hasError = true;
		header("Location: ../feedback.php?error=" . urlencode("blank-field"));
	} else {
		$name = trim($_POST['name']);
	}

	if(trim($_POST['email']) == 'Email' || trim($_POST['email']) == '')  {
		$hasError = true;
		header("Location: ../feedback.php?error=" . urlencode("blank-field"));
	} else if (!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", trim($_POST['email']))) {
		$hasError = true;
		header("Location: ../feedback.php?error=" . urlencode("invalid-address"));
	} else {
		$email = trim($_POST['email']);
	}

	if(trim($_POST['message']) == 'Tell us how we can improve the Axiom cards.' || trim($_POST['message']) == '') {
		$hasError = true;
		header("Location: ../feedback.php?error=" . urlencode("blank-field"));
	}else {
		if(function_exists('stripslashes')) {
			$message = stripslashes(trim($_POST['message']));
		} else {
			$message = trim($_POST['message']);
		}
	}

	if(!isset($hasError)) {
		$emailTo = 'info@goinvo.com';
		$subject = 'Design Axioms Feedback';
		
		$headers .= 'From: '.$email."\n";
		$headers .= 'MIME-Version: 1.0' ."\n";
		$headers .= 'Content-Type: text/plain; charset=iso-8859-1' ."\n";
		$headers .= 'Content-Transfer-Encoding: 8bit'. "\n\n";
	
		$body = "$message \n\n- $name \n$email\n\n ";

		mail($emailTo, $subject, $body, $headers);
		
		header("Location: ../feedback.php?confirm=" . urlencode("confirm"));
	}
}
?>
	