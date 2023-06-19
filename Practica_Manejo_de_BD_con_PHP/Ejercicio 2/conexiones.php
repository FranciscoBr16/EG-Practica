<?php 

    $link = mysqli_connect("127.0.0.1:3310", "root") or die ("Problemas de conexión a la base de datos"); // La palabra clave die, sirve para el manejo de errores. Interrumpe la ejecución del programa e indica la causa del error. 

    try{
        mysqli_select_db($link, "capitales");
        echo 'Conectado exitosamente';

    }catch(Exception $e){
        print "Error: " . $e->getMessage();
    }

?>