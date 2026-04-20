    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

<div class="row">
    <div class="col-12">
        <h1>Registrar Videojoc</h1>
        <form action="registrar.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nom</label>
                <input placeholder="Nombre" class="form-control" type="text" name="nombre" id="nombre" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripció</label>
                <textarea placeholder="Descripción" class="form-control" name="descripcion" id="descripcion" cols="30" rows="10" required></textarea>
            </div>
            <div class="form-group"><button class="btn btn-success">Guardar</button></div>
            <div class="form-group mt-2">
                <a class="btn btn-warning" href="mostrat.php">Tornar</a>
            </div>
        </form>
        
    </div>
</div>
