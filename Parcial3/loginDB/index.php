<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <style>
        *{
            font-family: 'Roboto', sans-serif;
        }
    </style>
    <?php
        session_start();
        if(!isset($_SESSION["usuario"])){
            header("location:login.php");
        }
    ?>
    <?php
        echo "<h1>Hola " . $_SESSION["usuario"] . "</h1><br><br>";
    ?>
    <p><a href="cerrar.php">Cerrar Sesión</a></p>
</body>
</html>