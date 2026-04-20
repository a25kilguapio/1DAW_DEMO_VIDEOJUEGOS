<?php
include "conexion.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $categoria = $_POST["categoria"];

    $sentencia = $mysqli->prepare("INSERT INTO videojocs (nombre, descripcion, categoria) VALUES (?, ?, ?)");
    $sentencia->bind_param("sss", $nombre, $descripcion, $categoria);

    if (!$sentencia) die("Error en prepare: " . $mysqli->error);

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
            <div class="form-group">
                <label for="categoria">Categoría</label>
                <select class="form-control" name="categoria" id="categoria" required>
                    <option value="">-- Selecciona una categoría --</option>
                    <option value="accio">Acció</option>
                    <option value="aventures">Aventures</option>
                    <option value="esports">Esports</option>
                    <option value="estrategia">Estrategia</option>
                </select>
            </div>
            <div class="form-group mt-2">
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-warning" href="mostrat.php">Volver</a>
            </div>
    
        </form>
    </div>
</div>