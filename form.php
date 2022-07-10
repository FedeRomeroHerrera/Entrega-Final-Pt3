<?php

$nombre = $_POST['name'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$mensaje = "Este es un mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Apellido " . $apellido . ",\r\n";
$mensaje .= "Su e-email es " . $email . ",\r\n";
$mensaje .= "Mensaje: " . $_POST["mensaje"] . ",\r\n";

$para = 'pagana.co.velas@gmail.com';
$asunto = 'Este mail fue enviado desde PAGANA';

mail($para, $asunto, utf8_decode($mensaje));

header('Location:index.html');

?>