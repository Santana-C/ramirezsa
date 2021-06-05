<?php
$connect = new PDO("mysql:host=localhost;dbname=ramirezsa", "root", "");

$method = $_SERVER['REQUEST_METHOD'];

if($method == 'GET')
{
   $data = array(
      ':nombre'               => "%" . $_GET['nombre'] . "%",
      ':apellido_paterno'     => "%" . $_GET['apellido_paterno'] . "%",
      ':apellido_materno'     => "%" . $_GET['apellido_materno'] . "%",
      ':email'                => "%" . $_GET['email'] . "%"
   );
   $query = "SELECT id_usuario, nombre, apellido_paterno, apellido_materno, email 
               FROM usuario_sample 
               WHERE nombre LIKE :nombre 
               AND apellido_paterno LIKE :apellido_paterno 
               AND apellido_materno LIKE :apellido_materno 
               AND email LIKE :email";

   $statement = $connect->prepare($query);
   $statement->execute($data);
   $result = $statement->fetchAll();
   foreach($result as $row)
   {
      $output[] = array(
         'id_usuario'                 => $row['id_usuario'],   
         'nombre'             => $row['nombre'],
         'apellido_paterno'   => $row['apellido_paterno'],
         'apellido_materno'   => $row['apellido_materno'],
         'email'              => $row['email']
   );
   }
   header("Content-Type: application/json");
   echo json_encode($output);
}

if($method == "POST")
{
   $data = array(
   ':nombre'             => $_POST['nombre'],
   ':apellido_paterno'   => $_POST["apellido_paterno"],
   ':apellido_materno'   => $_POST["apellido_materno"],
   ':email'              => $_POST["email"]
   );

   $query = "INSERT INTO usuario_sample (nombre, apellido_paterno, apellido_materno, email) VALUES (:nombre, :apellido_paterno, :apellido_materno, :email)";
   $statement = $connect->prepare($query);
   $statement->execute($data);
}

if($method == 'PUT')
{
   parse_str(file_get_contents("php://input"), $_PUT);
   $data = array(
   ':id_usuario'         => $_PUT['id_usuario'],
   ':nombre'             => $_PUT['nombre'],
   ':apellido_paterno'   => $_PUT['apellido_paterno'],
   ':apellido_materno'   => $_PUT['apellido_materno'],
   ':email'              => $_PUT['email']
   );
   $query = "UPDATE usuario_sample 
      SET nombre = :nombre, 
      apellido_paterno = :apellido_paterno, 
      apellido_materno = :apellido_materno, 
      email = :email 
      WHERE id_usuario = :id_usuario";
   $statement = $connect->prepare($query);
   $statement->execute($data);
}

if($method == "DELETE")
{
   parse_str(file_get_contents("php://input"), $_DELETE);
   $query = "DELETE FROM usuario_sample WHERE id_usuario = '".$_DELETE["id_usuario"]."'";
   $statement = $connect->prepare($query);
   $statement->execute();
}

?>