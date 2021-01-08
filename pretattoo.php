
<?php

echo 'oi papis 2<br>'; 

$email_usuario = "andrefteodoro@gmail.com";
$email_remetente = "andre@donttouch.com.br";

$headers = "MIME-Version: 1.1\n";
$headers .= "Content-type: text/plain; charset=iso-8859-1\n";
$headers .= "From: $email_remetente\n"; // remetente
$headers .= "Return-Path: $email_remetente\n"; // return-path
$headers .= "Reply-To: $email_usuario\n"; // Endereço (devidamente validado) que o seu usuário informou no contato
$envio = mail("destinatario@algum-email.com", "Assunto", "Mensagem", $headers, "-f$email_remetente");
?>


