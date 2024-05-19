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
    // Si no estamos en los archivos específicos, mostrar el mensaje
    if ($archivo_actual !== "read.php" && $archivo_actual !== "login.php" && $archivo_actual !== "update.php" && $archivo_actual !== "enviar_registro.php") {
        echo "Conexión realizada con éxito";
    }
}

?>
