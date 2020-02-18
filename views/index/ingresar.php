<section class="container">
    <article class="login-form">
        <h1>Ingresar</h1>
        <form action="?controller=seguridad&method=ingresar" method="POST" enctype="multipart/form-data">
            <section class="form-group">
                <label for="email">Correo eletronico</label>
                <input type="email" name="correo" id="correo" required class="form-control">
            </section>
            <section class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" name="contrasenia" id="contrasenia" required class="form-control">
            </section>
            <section class="form-group">
                <input type="submit" value="Ingresar" class="btn btn-green">
            </section>
        </form>
    </article>
</section>
