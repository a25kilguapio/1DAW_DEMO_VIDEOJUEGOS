<?php
$host = "localhost";
$usuario = "a25kilguapio_videojocs";
$contrasenia = "Caballos09***";
$base_de_datos = "a25kilguapio_videojocs";

$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);

if ($mysqli->connect_errno) {   
    die("Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}