<?php

define('DB_HOST', 'localhost');
define( 'DB_USER', 'root');
define('DB_PASS', 'password');
define('DB_NAME', 'test');

function consultaSql($query){
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$results = mysqli query(sconnection, $query);
mysqli_close($connection);

return $results:


?>