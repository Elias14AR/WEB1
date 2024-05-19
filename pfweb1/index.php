<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="asp.css">
    <title>Document</title>
</head>
<body>
    

<div >
    <h1 class="cent">Prospectos</h1>
</div>

<


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
                <label for="nombre_usuario">Ingresa nombre completo:</label>
                <input type="text" name="nombre_usuario" required maxlength="100" placeholder="Ingresa tu Nombre">
                <br><br>
            </div>

            <div class="form-group">
                <label for="correo">Ingresa correo:</label>
                <input type="text" name="correo" required maxlength="100" placeholder="Ingresa tu Correo">
                <br><br>
            </div>

            <div class="form-group">
                <label for="contrasena">Ingresa contraseña:</label>
                <input type="password" name="contrasena" required maxlength="100" placeholder="Ingresa tu contraseña">
                <br><br>
            </div>

            <div class="form-group">
                <label for="descripcion">Ingresa Descripcion:</label>
                <input type="text" name="descripcion" required maxlength="100" placeholder="Ingresa una descripcion">
                <br><br>
            </div>

            <button type="submit" name="submit">Enviar registro</button>
            <button type="button1" onclick="borrarRegistro()">Borrar registro</button>
        </form>
</body>
</html>

<p class="cent">
    <a href='index.php' class="cent">Nuevo registro</a>
</p>
