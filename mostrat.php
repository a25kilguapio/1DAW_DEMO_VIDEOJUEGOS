<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "conexion.php";

$resultado = $mysqli->query("SELECT id, nombre, descripcion, categoria FROM videojocs");
$videojuegos = $resultado->fetch_all(MYSQLI_ASSOC);
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<br>

<a class="btn btn-primary" href="registrar.php">Nuevo videojuego</a>
<table class="table mt-3">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Descripció</th>
            <th>Categoria</th>
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
                <td>
                    <?php
                    $color = "";

                    switch ($videojuego["categoria"]) {
                        case "accio":
                            $color = "danger"; 
                            break;
                        case "aventures":
                            $color = "primary"; 
                            break;
                        case "esports":
                            $color = "success"; 
                            break;
                        case "estrategia":
                            $color = "warning"; 
                            break;
                    }
                    ?>
                    
                    <span class="badge bg-<?= $color ?>">
                        <?= $videojuego["categoria"] ?>
                    </span>
                </td>
                <td><a href="editar.php?id=<?= $videojuego["id"] ?>">Editar</a></td>
                <td><a href="eliminar.php?id=<?= $videojuego["id"] ?>">Eliminar</a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<div class="form-group mt-2">
    <a class="btn btn-warning" href="index.php">Tornar</a>
</div>