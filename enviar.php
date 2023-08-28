<?php

$destino = "gabiista8@gmail.com";
$asunto = "Este Mail fue enviado desde la web";
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$numero = $_POST["numero"];
$mensaje = $_POST["mensaje"];
$contenido = "Nombre: " . $nombre . "\nEmail: " . $email . "\nNúmero: " . $numero . "\Consulta: " . $mensaje;
$mail = mail($destino,"Nueva Solicitud",$contenido);
header("Location:exito.html");

?>
