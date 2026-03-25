<?php
include "conexion.php";

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];

$sentencia = $mysqli->prepare("UPDATE videojocs SET nombre = ?, descripcion = ? WHERE id = ?");
if (!$sentencia) die("Error en prepare: " . $mysqli->error);

$sentencia->bind_param("ssi", $nombre, $descripcion, $id);
$sentencia->execute() or die("Error en execute: " . $sentencia->error);

header("Location: mostrat.php");
exit;