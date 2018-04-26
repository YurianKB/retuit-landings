<?php
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$telefono = $_POST['telefono'];
$colaboradores = $_POST['colaboradores'];
$servicio = $_POST['servicio'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Email: " . $mail . " \r\n";
$mensaje .= "Teléfono: " . $telefono . " \r\n";
$mensaje .= "Colaboradores: " . $colaboradores . " \r\n";
$mensaje .= "Servicio requerido: " . $servicio . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'yuriankb@gmail.com';
$asunto = 'Formulario Desarrollo Retuit';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:gracias-d.html");
?>
