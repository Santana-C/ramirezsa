<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />
    <title>CRUD</title>
    <style>
        *{ font-family: 'Roboto', sans-serif; }
        .hide { display:none; }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Inicio</a>
            <form class="d-flex">
                <a class="btn btn-outline-primary me-4" href="registrar_usuario.php">Registrar Usuario</a>
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
                <?php
                    echo "<h1 class='text-center'>Hola " . $_SESSION["usuario"] . "</h1><br>";
                ?>
            </div>
        </div>
        <div class="table-responsive">
          <h3 align="center">Usuarios</h3><br />
          <div id="grid_table"></div>
        </div>
      </div>
    </body>
</body>
</html>
<script>
    $('#grid_table').jsGrid({
        width: "100%",
        height: "500px",
        filtering: true,
        //inserting: true,
        editing: true,
        sorting: true,
        paging: true,
        autoload: true,
        pageSize: 10,
        pageButtonCount: 5,
        deleteConfirm: function(item) { return "¿Desea eliminar al usuario \"" + item.nombre + "\" ?"; },
        controller: {
            loadData: function(filter){ return $.ajax({ url: "fetch_data.php", type: "GET", data: filter }); },
            //insertItem: function(item){ return $.ajax({ url: "fetch_data.php", type: "POST", data:item }); },
            updateItem: function(item){ return $.ajax({ url: "fetch_data.php", type: "PUT", data: item }); },
            deleteItem: function(item){ return $.ajax({ url: "fetch_data.php", type: "DELETE", data: item }); }
        },

        fields: [
            { name: "id_usuario", type: "hidden", css: 'hide' },
            { name: "nombre", title: "Nombre", align : "left", type: "text", width: 130, validate: "required" },
            { name: "apellido_paterno", title: "Apellido Paterno", align : "left", type: "text", width: 100, validate: "required" },
            { name: "apellido_materno", title: "Apellido Materno", align : "left", type: "text", width: 100, validate: "required" },
            { name: "edad", title: "Edad", align : "right", type: "text", width: 60, validate: function(value){ 
                if(value > 0){ 
                    return true; 
                }} },
            { name: "email", title: "Correo", align : "left", type: "text", width: 150, validate: "required" },
            { type: "control" }
        ]
    });
</script>