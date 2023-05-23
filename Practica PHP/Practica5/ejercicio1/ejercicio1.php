<?php
/*
ini_set("SMTP", "localhost");
ini_set("smtp_port", "25");
Por si tira un error, esa fue una solucion que encontre */
$destinatario = "fransbebobruno@gmail.com ";
$asunto = "Prueba";
$cuerpo = '
<html>
<head>
  <title>Ejemplo de correo electrónico HTML</title>
</head>
<body>
  <h1>¡Hola!</h1>
  <p>Este es un correo de prueba.</p>
</body>
</html>';
mail($destinatario,$asunto,$cuerpo);
echo "Correo enviado";
?> 