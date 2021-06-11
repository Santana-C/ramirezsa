<?php
$connect = new PDO("mysql:host=localhost;dbname=ramirezsa", "root", "");

$method = $_SERVER['REQUEST_METHOD'];

if($method == "POST")
{
    if($method == "POST")
    {
        $data = array(
            ':nombre'             => $_POST['nombre'],
            ':apellido_paterno'   => $_POST["apellido_paterno"],
            ':apellido_materno'   => $_POST["apellido_materno"],
            ':edad'               => $_POST["edad"],
            ':email'              => $_POST["email"],
            ':contrasena'         => $_POST["contrasena"]
        );
        $query = "INSERT INTO usuario (nombre, apellido_paterno, apellido_materno, edad, email, contrasena) 
                    VALUES (:nombre, :apellido_paterno, :apellido_materno, :edad, :email, sha1(:contrasena))";
        $statement = $connect->prepare($query);
        $statement->execute($data);
        
        header("Location: index.php");
    }
}
?>