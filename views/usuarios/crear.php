<section class="container">
    <h1>Registrar usuario</h1>
    <form action="?controller=usuario&method=almacenar" method="POST">
        <section class="form-group">
            <label for="name">Nombres</label>
            <input type="text" name="nombres" id="nombres" required class="form-control" autofocus>
        </section>
        <section class="form-group">
            <label for="name">Apellidos</label>
            <input type="text" name="apellidos" id="apellidos" required class="form-control">
        </section>
        <section class="form-group">
            <label for="email">Correo</label>
            <input type="email" name="correo" id="correo" required class="form-control">
        </section>
        <section class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" name="contrasenia" id="contrasenia" required class="form-control">
        </section>
        <section class="form-group">
            <label for="rol_id">Rol</label>
            <select name="rol_id" id="rol_id" class="form-control" required>
                <option value="">-- Seleccionar rol --</option>
                <?php foreach ($roles as $rol): ?>
                    <option value="<?= $rol->id ?>"><?= $rol->nombre ?></option>
                <?php endforeach; ?>
            </select>
        </section>
        <section class="form-group">
            <label for="text">Sitio web</label>
            <input type="text" name="sitio_web" id="sitio_web" required class="form-control">
        </section>
        <section class="form-group">
            <label for="text">Direccion</label>
            <input type="text" name="direccion" id="direccion" required class="form-control">
        </section>
        <section class="form-group">
            <label for="text">Celular</label>
            <input type="text" name="celular" id="celular" required class="form-control">
        </section>
        <section class="form-group">
            <label for="text">Profesion</label>
            <input type="text" name="profesion" id="profesion" required class="form-control">
        </section>
        <section class="form-group">
            <input type="submit" value="Registar" class="btn btn-green">
            <a href="?controller=usuario" class="btn btn-outline-red ml-2">Volver</a>
        </section>
    </form>
</section>
