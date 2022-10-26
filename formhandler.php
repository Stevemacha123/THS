<?php
$name = $-POST['name'];
$results = $-POST['result'];
$gender = $-POST['gender'];
$email = $-POST['email'];
$phone = $-POST['phone'];

$emailfrom = 'https://stevemacha123.github.io/THS/';

$emailsubject = 'New Student Application' ;

$emailbody = "User Name: $name.\n"
"User Results: $results.\n"
"User Gender: $gender.\n"
"User Email: $email.\n"
"User Phone: $phone.\n";

$to = 'machasteve1@gmail.com';

$headers = "From: $emailfrom \r\n";

$headers = "Reply-To: $email \r\n";

mail($to,$emailsubject,$emailbody,$headers);

header("Location: logic page.html");

?>
