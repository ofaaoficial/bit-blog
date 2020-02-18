<section class="container">
    <h1>Modificar publicacion</h1>
    <form action="?controller=publicacion&method=actualizar&id=<?= $publicacion->id ?>" method="POST">
        <section class="form-group">
            <label for="name">Titulo</label>
            <input type="text" name="titulo" id="titulo" required class="form-control" autofocus value="<?= $publicacion->titulo ?>">
        </section>
        <section class="form-group">
            <label for="rol_id">Categorias</label>
            <select name="categoria_id" id="categoria_id" class="form-control" required>
                <option value="">-- Seleccionar categoria --</option>
                <?php foreach ($categorias as $categoria): ?>
                    <option value="<?= $categoria->id ?>" <?php if($categoria->id == $publicacion->categoria_id): ?> selected <?php endif; ?>><?= $categoria->nombre ?></option>
                <?php endforeach; ?>
            </select>
        </section>
        <section class="form-group">
            <label for="name">Contenido</label>
            <textarea rows="10" name="contenido" id="contenido" required class="form-control"><?= $publicacion->contenido ?></textarea>
        </section>
        <section class="form-group">
            <input type="submit" value="Registar" class="btn btn-green">
            <a href="?controller=publicacion" class="btn btn-outline-red ml-2">Volver</a>
        </section>
    </form>
</section>
