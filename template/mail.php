<?php

$name=$_POST['name'];
$email=$_POST['email'];
$msg=$_POST['msg'];
$webemail="info@domain.com"; // Replace with your email address

# -=-=-=- MIME BOUNDARY
$mime_boundary = "----MSA Shipping----".md5(time());

$headers = "From: $email\n";
$headers .= "Reply-To: $webemail\n";
$headers .= "MIME-Version: 1.0\n";
$headers .= "Content-Type: multipart/alternative; boundary=\"$mime_boundary\"\n";
$subject = "Email Subject"; // Replace email subject

$message .= "--$mime_boundary\n";
$message .= "Content-Type: text/html; charset=UTF-8\n";
$message .= "Content-Transfer-Encoding: 8bit\n\n";

$message .= "<html>\n";
$message .= "<body style=\"font-family:Verdana, Verdana, Geneva, sans-serif; font-size:12px; color:#666666;\">\n";

$message .="Name:";
$message .="$name";
$message .="<br/>";
$message .="Email:";
$message .="$email";
$message .="<br/>";
$message .="Message:";
$message .="$msg";

$message .= "</body>\n";
$message .= "</html>\n";
# -=-=-=- FINAL BOUNDARY
$message .= "--$mime_boundary--\n\n";

$mail_sent = mail($webemail,$subject,$message,$headers);

if($mail_sent)
{
echo "Mail sent";
}
else
{
echo "Failed. Try again.";
}


?>