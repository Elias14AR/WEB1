<?php
include "conexion.php";

// Verificar si se recibió un ID válido por POST
if(isset($_POST['id'])) {
    // Obtener el ID del usuario a eliminar
    $id = $_POST['id'];

    // Crear la consulta SQL para eliminar el usuario
    $sql = "DELETE FROM user WHERE id = $id";

    // Ejecutar la consulta
    if ($conexion->query($sql) === TRUE) {
        echo "Usuario eliminado con éxito";
    } else {
        echo "Error al eliminar usuario: " . $conexion->error;
    }
} else {
    echo "ID de usuario no proporcionado";
}

echo "<p><a href='read.php'>Volver a la página de lectura de usuarios</a></p>";

// Cerrar la conexión
$conexion->close();
?>
