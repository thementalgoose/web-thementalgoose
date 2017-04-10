<?php
// Check for a failure
if (strcmp(trim($_POST["name"]),"") == 0) {
	header('Location: ../index.php?sent=false&a=n');
}
if (strcmp(trim($_POST["email"]),"") == 0) {
	header('Location: ../index.php?sent=false&a=e');
}
if (strcmp(trim($_POST["message"]),"") == 0) {
	header('Location: ../index.php?sent=false&a=m');
}

$to = 'thementalgoose@gmail.com';
$subject = 'Website: Email from ' . $_POST["name"] . " (" . $_POST["email"] . ")";
$message = 'From: ' . $_POST["email"]
		. "\n\nMessage from " . $_POST["name"] . ":\n" . $_POST['message'];
$headers = 'From: ' . $_POST["email"] . "\r\n" .
	'Reply-To: ' . $_POST["email"] . "\r\n" .
	'X-Mailer: PHP/' . phpversion();
if (mail($to, $subject, $message, $headers)) {
	header('Location: ../index.php?sent=true');
} else {
	header('Location: ../index.php?sent=false');
}
?>