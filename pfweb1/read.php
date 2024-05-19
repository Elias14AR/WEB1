<?php
include "conexion.php";
mysqli_set_charset($conexion, 'utf8');

// Inicializar la variable $id_usuario
$id_usuario = "";

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el ID del usuario del formulario
    $id_usuario = $_POST['id_usuario'];

    // Eliminar el usuario de la base de datos
    $sql_delete = "DELETE FROM user WHERE id = '$id_usuario'";
    if ($conexion->query($sql_delete) === TRUE) {
        echo "<h2>Usuario eliminado correctamente.</h2>";
    } else {
        echo "Error al eliminar el usuario: " . $conexion->error;
    }
}

// Consultar los datos de la tabla user
$sql = "SELECT id, nombre_usuario, correo, descripcion FROM user";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Usuarios</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        /* Estilos para la barra de navegación */
        .navbar {
            overflow: hidden;
            background-color: #333;
        }

        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
        /* Estilos para el botón de eliminar */
        .btn-delete {
            background-color: #f44336;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 8px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .btn-delete:hover {
            background-color: #ff6659;
        }
    </style>
</head>
<body>
    <!-- Barra de navegación -->
    <div class="navbar">
        <a href="index1.html">Inicio</a>
        <a href="#">Leer Usuarios</a>
    </div>

    <!-- Formulario para eliminar usuario por ID -->
    <h1>Eliminar Usuario</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="id_usuario">ID del Usuario a Eliminar:</label>
        <input type="text" name="id_usuario" required>
        <button type="submit">Eliminar</button>
    </form>
    
    <!-- Tabla de usuarios -->
    <h1>Usuarios Registrados</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre de Usuario</th>
                <th>Correo</th>
                <th>Descripción</th>
                <th>Acciones</th> <!-- Nueva columna para acciones -->
            </tr>
        </thead>
        <tbody>
            <?php
            // Mostrar los datos en la tabla
            while ($fila = $resultado->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $fila['id'] . "</td>";
                echo "<td>" . $fila['nombre_usuario'] . "</td>";
                echo "<td>" . $fila['correo'] . "</td>";
                echo "<td>" . $fila['descripcion'] . "</td>";
                echo "<td><form action='read.php' method='post'><input type='hidden' name='id_usuario' value='" . $fila['id'] . "'><button class='btn-delete' type='submit'>Eliminar</button></form></td>"; // Botón para eliminar
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    
    <!-- Enlace para ir a index1.html -->
    <p><a href="index1.html">Volver a la página principal</a></p>
</body>
</html>

<?php
// Liberar el resultado y cerrar la conexión
$resultado->free();
$conexion->close();
?>
