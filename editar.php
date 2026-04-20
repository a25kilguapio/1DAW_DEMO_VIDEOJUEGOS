<?php
include "conexion.php";

$id = $_GET["id"] ?? null;
if (!$id) exit("No hi ha ID");

$sentencia = $mysqli->prepare("SELECT id, nombre, descripcion FROM videojocs WHERE id = ?");
$sentencia->bind_param("i", $id);
$sentencia->execute();
$resultado = $sentencia->get_result();
$videojuego = $resultado->fetch_assoc();
if (!$videojuego) exit("No hi ha resultats per aquest ID");
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="row">
    <div class="col-12">
        <h1>Actualitzar videojoc</h1>
        <form action="actualizar.php" method="POST">
            <input type="hidden" name="id" value="<?= $videojuego["id"] ?>">
            <div class="form-group">
                <label for="nombre">Nom</label>
                <input value="<?= $videojuego["nombre"] ?>" placeholder="Nombre" class="form-control" type="text" name="nombre" id="nombre" required>            
            </div>
            
            <div class="form-group">
                <label for="descripcion">Descripció</label>
                <textarea placeholder="Descripción" class="form-control" name="descripcion" id="descripcion" cols="30" rows="10" required><?= $videojuego["descripcion"] ?></textarea>
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
                <a class="btn btn-warning" href="mostrat.php">Tornar</a>
            </div>
        </form>
    </div>
</div>