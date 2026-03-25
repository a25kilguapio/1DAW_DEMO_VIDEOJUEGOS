<?php
include "conexion.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];

    $sentencia = $mysqli->prepare("INSERT INTO videojocs (nombre, descripcion) VALUES (?, ?)");
    if (!$sentencia) die("Error en prepare: " . $mysqli->error);

    $sentencia->bind_param("ss", $nombre, $descripcion);
    $sentencia->execute() or die("Error en execute: " . $sentencia->error);

    header("Location: mostrat.php");
    exit;
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="row">
    <div class="col-12">
        <h1>Registrar videojuego</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input placeholder="Nombre" class="form-control" type="text" name="nombre" id="nombre" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea placeholder="Descripción" class="form-control" name="descripcion" id="descripcion" cols="30" rows="10" required></textarea>
            </div>
            <div class="form-group mt-2">
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-warning" href="mostrat.php">Volver</a>
            </div>
        </form>
    </div>
</div>