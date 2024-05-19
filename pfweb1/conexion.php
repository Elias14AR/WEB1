<?php

$archivo_actual = basename($_SERVER['PHP_SELF']);

$user_db = "if0_36150760";
$pass_db = "EhWU6kFfQWUvuJ";
$db_name = "if0_36150760_pweb";
$host_db = "sql101.infinityfree.com";
$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
    die("La conexión falló: " . $conexion->connect_error);
} else {
    // Si no estamos en el archivo read.php, mostrar el mensaje
    if ($archivo_actual !== "read.php") {
        echo "Conexión realizada con éxito";
    }
}

?>
