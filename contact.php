<?php

$name = $_POST['name'];
$v_email= $_POST['email'];
$v_subject = $_POST['subject'];
$message= $_POST['message'];

$email_from = 'from: '.$name;

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Name: $v_email.\n".
                "Subject: $$v_subject.\n".
                "User message: $message.\n";


$to = 'mahorprashant2@gmail.com';

$headers = "from: $email_from";

$headers .="Reply-To: $v_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");



?>