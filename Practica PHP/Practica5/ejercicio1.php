<?php
ini_set("SMTP", "localhost");
ini_set("smtp_port", "25");
$destinatario = "fransbebobruno@gmail.com ";
$asunto = "Prueba";
$cuerpo = "Esto es una prueba de envío de correo a través del servidor";
mail($destinatario,$asunto,$cuerpo)
?> 