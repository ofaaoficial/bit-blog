<section class="container">
    <h1>Modificar categoria</h1>
    <form action="?controller=categoria&method=actualizar&id=<?= $categoria->id ?>" method="POST">
        <section class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="nombre" id="nombre" required class="form-control" autofocus value="<?= $categoria->nombre ?>">
        </section>
        <section class="form-group">
            <label for="name">Descripcion</label>
            <input type="text" name="descripcion" id="descripcion" required class="form-control" value="<?= $categoria->descripcion ?>">
        </section>
        <section class="form-group">
            <input type="submit" value="Registar" class="btn btn-green">
            <a href="?controller=categoria" class="btn btn-outline-red ml-2">Volver</a>
        </section>
    </form>
</section>
