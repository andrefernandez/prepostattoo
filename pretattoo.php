
<?php
ini_set("SMTP", "aspmx.l.google.com");
ini_set("sendmail_from", "andre@donttouch.com.br");

$message = "The mail message was sent with the following mail setting:\r\nSMTP = aspmx.l.google.com\r\nsmtp_port = 25\r\nsendmail_from = YourMail@address.com";

$headers = "From: andre@donttouch.com.br";

mail("andrefteodoro@gmail.com", "Testing", $message, $headers);
echo "Check your email now....&lt;BR/>";
?>