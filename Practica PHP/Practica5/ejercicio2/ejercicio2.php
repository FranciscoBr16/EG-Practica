<?php

$destinatario = "fransbebobruno@gmail.com ";
$asunto = "Consulta desde sitio web";
$cuerpo = $_POST['consulta'];
$desde='From:' .$_POST['email'];
mail($destinatario,$asunto,$cuerpo,$desde);
echo "Correo enviado";
?>