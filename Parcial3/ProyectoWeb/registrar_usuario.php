<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Inicio</a>
            <form class="d-flex">
                <a class="btn btn-outline-danger" href="cerrar.php">Cerrar Sesión</a>
            </form>
            </div>
        </div>
    </nav>
    <?php
        session_start();
        if(!isset($_SESSION["usuario"])){ header("location:login.php"); }
    ?>
    <div class="container mt-5">
        <div class="row align-items-center">
            <div class="col align-self-center">
                <h1 class="text-center">Registrar Usuario</h1><br>
            </div>
        </div>
        <form class="container" method="POST" action="registrar.php" >
        <div class="row justify-content-center m-3 p-3">
            <div class="form-group  col-sm-6 col-md-12 col-lg-10">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
            </div>
            <div class="form-group col-sm-6 col-md-6 col-lg-5">
                <label for="apellido_paterno">Apellido Paterno</label>
                <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" placeholder="Apellido Paterno">
            </div>
            <div class="form-group col-sm-6 col-md-6 col-lg-5">
                <label for="apellido_materno">Apellido Materno</label>
                <input type="text" class="form-control" id="apellido_materno" name="apellido_materno" placeholder="Apellido Materno">
            </div>
            <div class="form-group col-sm-6 col-md-6 col-lg-5">
                <label for="edad">Edad</label>
                <input type="number" class="form-control" id="edad" name="edad" placeholder="18">
            </div>
            <div class="form-group col-sm-6 col-md-6 col-lg-5">
                <label for="email">Correo</label>
                <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="nombre@correo.com">
            </div>
            <div class="form-group col-sm-6 col-md-6 col-lg-5">
                <label for="contrasena">Contraseña</label>
                <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="********">
            </div>
            <div class="form-group col-sm-6 col-md-6 col-lg-5">
                <label for="inputRepetirContrasena">Confirmar Contraseña</label>
                <input type="password" class="form-control" id="inputRepetirContrasena" placeholder="********">
            </div>
            <div class="col-sm-10 col-md-4 col-lg-5 m-5">
                <button type="submit" class="btn btn-primary col-lg-10">Registrarse</button>
            </div>
        </div>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="js/script_registrar.js"></script>
</body>
</html>