<?php
include "conexion.php";

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$categoria = $_POST["categoria"];
$sentencia = $mysqli->prepare("UPDATE videojocs SET nombre = ?, descripcion = ?, categoria = ? WHERE id = ?");

if (!$sentencia) die("Error en prepare: " . $mysqli->error);

$sentencia->bind_param("sssi", $nombre, $descripcion, $categoria, $id);
$sentencia->execute() or die("Error en execute: " . $sentencia->error);

header("Location: mostrat.php");
exit;
?>