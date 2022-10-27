<?php
$name = $_POST['name'];
$results = $_POST['result'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$email_from = 'https://stevemacha123.github.io/THS/formhandler.php';

$email_subject = 'New Student Application' ;

$email_body = "User Name: $name.\n".
"User Results: $results.\n".
"User Email: $email.\n".
"User Phone: $phone.\n";

$to = 'machasteve1@gmail.com';

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: logic page.html");

?>
