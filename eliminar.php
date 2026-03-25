<?php
include "conexion.php";

$id = $_GET["id"] ?? null;
if (!$id) exit("No hay ID");

$sentencia = $mysqli->prepare("DELETE FROM videojocs WHERE id = ?");
if (!$sentencia) die("Error en prepare: " . $mysqli->error);

$sentencia->bind_param("i", $id);
$sentencia->execute() or die("Error en execute: " . $sentencia->error);

header("Location: mostrat.php");
exit;