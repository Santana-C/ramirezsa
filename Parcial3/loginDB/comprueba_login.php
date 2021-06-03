<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    try{
        $base = new PDO("mysql:host=localhost; dbname=ramirezsa","root","");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM usuario_login WHERE usuario = :usuario AND contrasena = :password";
        $resultado = $base->prepare($sql);
        $usuario=htmlentities(addslashes($_POST["usuario"]));
        $password=htmlentities(addslashes($_POST["password"]));
        $resultado->bindValue(":usuario",$usuario);
        $resultado->bindValue(":password",sha1($password));
        $resultado->execute();
        $numero_registro = $resultado->rowCount();
        if($numero_registro!=0){
            session_start();
            $_SESSION["usuario"]=$_POST["usuario"];
            header("location:index.php");
        }
        else{
            header("location:login.php");
        }
    }catch(Exception $e){
        die("Error: " . $e->getMessage());
    }
    ?>
</body>
</html>