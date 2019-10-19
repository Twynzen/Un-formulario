<?php

$destino="razzziel001@gmail.com";
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];
$contenido = "Nombre: " . $nombre. "\nCorreo: " . $correo .
 "\nTeléfono: ". $telefono . "\nMensaje: " . $mensaje;

 /*Así se envia el mensaje*/
 mail($destino, "Contacto",$contenido);
 header("Location: gracias.html");

 ?>
