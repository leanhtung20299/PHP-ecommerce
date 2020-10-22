<?php
$to_email = "leanhtung.le.7@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi, This is test email send by PHP Script";
$headers = "From: leanhtung20299@gmail.com";
ini_set( 'sendmail_from', "leanhtung20299@gmail.com" );
ini_set( 'SMTP', $to_email );  
ini_set( 'smtp_port', 465 );
if (mail($to_email, $subject, $body,$headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}