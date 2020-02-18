<section class="container">
    <h1>Registrar categoria</h1>
    <form action="?controller=categoria&method=almacenar" method="POST">
        <section class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="nombre" id="nombre" required class="form-control" autofocus>
        </section>
        <section class="form-group">
            <label for="name">Descripcion</label>
            <input type="text" name="descripcion" id="descripcion" required class="form-control">
        </section>
        <section class="form-group">
            <input type="submit" value="Registar" class="btn btn-green">
            <a href="?controller=categoria" class="btn btn-outline-red ml-2">Volver</a>
        </section>
    </form>
</section>
