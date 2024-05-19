<?php
include "conexion.php";
mysqli_set_charset($conexion, 'utf8');

// Verificar si se ha enviado el formulario de actualización
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el ID del usuario y el nuevo nombre de usuario
    $id = $_POST['id'];
    $nuevoNombreUsuario = $_POST['nuevoNombreUsuario'];

    // Consultar si el ID del usuario existe en la base de datos
    $sql = "SELECT * FROM user WHERE id = $id";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        // El usuario existe, proceder con la actualización del nombre de usuario
        $sqlUpdate = "UPDATE user SET nombre_usuario = '$nuevoNombreUsuario' WHERE id = $id";
        if ($conexion->query($sqlUpdate) === TRUE) {
            echo "<h2>Nombre de usuario actualizado correctamente</h2>";
        } else {
            echo "<h2>Error al actualizar el nombre de usuario: " . $conexion->error . "</h2>";
        }
    } else {
        echo "<h2>No se encontró ningún usuario con el ID proporcionado</h2>";
    }
}

// Enlace para volver a read.php
echo "<p><a href='read.php'>Volver a la página de lectura de usuarios</a></p>";

// Cerrar la conexión
$conexion->close();
?>
