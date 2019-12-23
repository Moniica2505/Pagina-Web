<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

mail('monicaromero_25@hotmail.com', $subject, "Email de ". $name. PHP_EOL. $email, $message);

include 'contacto.html';
?>