<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="asp.css">
    <title>Document</title>
</head>
<body class="bc">




<div >
    <h1 class="cent">Crear un usuario</h1>
</div>



<div>


<p class="cent">
    <a href='login.html' class="cent">Inicio de sesion</a>
</p>


<p class="cent">
    <a href='index1.html' class="cent">Pagina principal</a>
</p>
</div>




<title>Formulario</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: white;
        margin: auto;
        padding: auto;
    }

    h1 {
        text-align: center;
    }

    form {
        text-align: center;
        max-width: 200px;
        margin: 20px auto;
        background-color: rgb(0, 132, 255);
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.5);
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    button {
        background-color: rgb(1, 255, 60);
        color: rgb(255, 245, 245);
        padding: 10px 20px;
        border-radius: 5px;
    }

    button[type="button1"] {
        background-color: rgb(247, 255, 1);
        color: rgb(0, 0, 0);
        padding: 10px 20px;
        border-radius: 5px;
    }

    button:hover {
        background-color: rgb(255, 0, 0);
    }
</style>
</head>
<body>
    <div>
        <form action="./enviar_registro.php" method="post">
            <hr>
            <div class="form-group">
                <label for="nombre_usuario">Ingresa un nombre de usuario:</label>
                <input type="text" name="nombre_usuario" required maxlength="100" placeholder="Ingresa tu Nombre">
                <br><br>
            </div>

            <div class="form-group">
                <label for="correo">Ingresa un correo:</label>
                <input type="text" name="correo" required maxlength="100" placeholder="Ingresa tu Correo">
                <br><br>
            </div>

            <div class="form-group">
                <label for="contrasena">Crea una contraseña:</label>
                <input type="password" name="contrasena" required maxlength="100" placeholder="Ingresa tu contraseña">
                <br><br>
            </div>

            <div class="form-group">
                <label for="descripcion">Ingresa tu nombre:</label>
                <input type="text" name="descripcion" required maxlength="100" placeholder="Ingresa tu nombre ">
                <br><br>
            </div>

            <div>
                <button type="submit" name="submit">Crear</button>
            </div>
            
            <div>
                <button type="button1" onclick="borrarRegistro()">Borrar campos</button>
            </div>
            
        </form>
</body>
</html>

<footer>
    <h1>

    </h1>
</footer>


<p class="cent">
    <a href='index.php' class="cent">Nuevo Usuario</a>
</p>

