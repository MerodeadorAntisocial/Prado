<?php


$host = "localhost";
$usuario = "root";
$contrasena = "";
$bd = "canchas";

$conexion = new mysqli($host, $usuario, $contrasena, $bd);

if ($conexion->connect_errno) {
    die("Error de conexión");
}

$conexion->set_charset("utf8");
?>