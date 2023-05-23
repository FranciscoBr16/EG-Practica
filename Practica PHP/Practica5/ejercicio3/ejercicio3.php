<?php
$destinatario = $_POST['email2'];
$asunto = "Recomendacion de sitio";
$cuerpo = "Te recomiendo que visites este sitio";
$desde='From:' .$_POST['email'];
mail($destinatario,$asunto,$cuerpo,$desde);
echo "Correo enviado";
?>