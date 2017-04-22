<?php
	$to = 'thementalgoose@gmail.com';
	$subject = 'Website: ' . $_POST['subject'];
	$message = 'From: ' . $_POST['email']
			. "\n\nSubject: " . $_POST['subject']
			. "\n\nMessage from " . $_POST['name'] . ":\n" . $_POST['message'];
	$headers = 'From: ' . $_POST['email'] . "\r\n" .
		'Reply-To: ' . $_POST['email'] . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

	if ($_POST['subject'].trim() == ""
		|| $_POST['email'].trim() == ""
		|| $_POST['name'].trim() == ""
		|| $_POST['message'].trim() == "") {
		header('Location: index.php#Contact?sent=false');
	}

	// if (mail($to, $subject, $message, $headers)) {
	// 	header('Location: index.php#Contact?sent=true');
	// } else {
		header('Location: index.php#Contact?sent=false');
	// }
?>
