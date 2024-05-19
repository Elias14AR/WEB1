<?php
include "conexion.php";
mysqli_set_charset($conexion, 'utf8');

// Verificar si se ha enviado un ID para eliminar
if(isset($_GET['id']) && !empty($_GET['id'])) {
    // Obtener el ID del usuario a eliminar
    $id_usuario = $_GET['id'];

    // Consultar la tabla user para verificar si el usuario existe
    $sql = "SELECT * FROM user WHERE id = $id_usuario";
    $resultado = $conexion->query($sql);

    // Verificar si se encontró un usuario con el ID proporcionado
    if ($resultado->num_rows == 1) {
        // Eliminar el usuario de la tabla
        $sql_delete = "DELETE FROM user WHERE id = $id_usuario";
        if ($conexion->query($sql_delete) === TRUE) {
            echo "Usuario eliminado correctamente.";
        } else {
            echo "Error al eliminar usuario: " . $conexion->error;
        }
    } else {
        echo "Usuario no encontrado.";
    }
} else {
    echo "ID de usuario no proporcionado.";
}

// Cerrar la conexión
$conexion->close();
?>
