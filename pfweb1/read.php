<?php
include "conexion.php";
mysqli_set_charset($conexion, 'utf8');

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

    <!-- Mensaje de conexión con éxito oculto -->
    <p style="display: none;">Conexión con éxito</p>
    
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
                echo "<td><form action='delete.php' method='post'><input type='hidden' name='id' value='" . $fila['id'] . "'><button class='btn-delete' type='submit'>Eliminar</button></form></td>"; // Botón para eliminar
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