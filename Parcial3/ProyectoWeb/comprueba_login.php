<?php
    session_start();
    try{
        $base = new PDO("mysql:host=localhost; dbname=ramirezsa","root","");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM usuario WHERE nombre = :usuario AND contrasena = :password";
        $resultado = $base->prepare($sql);
        $usuario=htmlentities(addslashes($_POST["usuario"]));
        $password=htmlentities(addslashes($_POST["password"]));
        $resultado->bindValue(":usuario",$usuario);
        $resultado->bindValue(":password",sha1($password));
        $resultado->execute();
        if($resultado->rowCount() >= 1){
            $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
            $_SESSION["usuario"] = $_POST["usuario"];
        }
        else{
            $_SESSION["usuario"] = null;
            $data = null;
        }
        print json_encode($data);
        $base = null;
    }catch(Exception $e){
        die("Error: " . $e->getMessage());
    }
?>