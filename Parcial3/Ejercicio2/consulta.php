<?php

$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$base_datos = "ramirezsa";

try
{
    $mbd = new PDO('mysql:host=localhost;dbname=ramirezsa', $usuario, $contrasena);
    foreach($mbd->query("SELECT * FROM Usuario") as $fila) {
        print_r($fila);
        print_r("\n");
    }
    $mbd = null;
}catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>