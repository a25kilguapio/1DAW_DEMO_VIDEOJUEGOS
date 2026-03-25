<?php
include "conexion.php";

$resultado = $mysqli->query("SELECT id, nombre, descripcion FROM videojocs");
$videojuegos = $resultado->fetch_all(MYSQLI_ASSOC);
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<br>

<a class="btn btn-primary" href="registrar.php">Nuevo videojuego</a>
<table class="table mt-3">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($videojuegos as $videojuego) { ?>
            <tr>
                <td><?= $videojuego["id"] ?></td>
                <td><?= $videojuego["nombre"] ?></td>
                <td><?= $videojuego["descripcion"] ?></td>
                <td><a href="editar.php?id=<?= $videojuego["id"] ?>">Editar</a></td>
                <td><a href="eliminar.php?id=<?= $videojuego["id"] ?>">Eliminar</a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>