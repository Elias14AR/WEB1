<?php
include "conexion.php";
mysqli_set_charset($conexion, 'utf8');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_usuario = $_POST['nombre_usuario'];
    $contrasena = $_POST['contrasena'];

    $sql = "SELECT * FROM user WHERE nombre_usuario = '$nombre_usuario' AND contrasena = '$contrasena'";
    $resultado = $conexion->query($sql);
    $count = mysqli_num_rows($resultado);

    if ($count == 1) {
        echo "<h1>Inicio de sesión exitoso</h1>";
        echo "<a href='./index1.html'>Ir a la página principal</a>";
    } else {
        echo "<h1>Nombre de usuario o contraseña incorrectos</h1>";
        echo "<a href='./login.html'>Intentar de nuevo</a>";
    }
}
?>
