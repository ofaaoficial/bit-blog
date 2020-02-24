<section class="panel publicacion">
    <span class="categoria"><?= $publicacion->nombre_categoria ?></span>
    <h1 class="titulo"><?= $publicacion->titulo; ?></h1>
    <p class="contenido"><?= $publicacion->contenido; ?></p>

    <article class="publicacion_pie">
        <span class="creador"><?= $publicacion->creador ?></span>
    </article>
</section>
<?php if (count($comentarios) >= 1) : ?>
    <section class="panel publicacion comentario">
        <h2>Lista de comentarios.</h2>
        <?php foreach ($comentarios as $comentario): ?>
            <article class="comentario">
                <strong><?= $comentario->nombre_usuario ?></strong>
                <p><?= $comentario->contenido ?></p>
            </article>
        <?php endforeach; ?>
    </section>
<?php endif; ?>
<?php if (isset($_SESSION['usuario'])): ?>
    <section class="panel publicacion form-comment">
        <form action="?controller=publicacion&method=comentar&id=<?= $_GET['id'] ?>" method="POST">
            <h2>Crear comentario</h2>
            <section class="form-group">
                <label for="comentario">Comentario</label>
                <textarea rows="10" name="contenido" id="contenido" required class="form-control"></textarea>
            </section>
            <section class="form-group">
                <input type="submit" value="Comentar" class="btn btn-green">
                <a href="?controller=index" class="btn btn-outline-red ml-2">Volver</a>
            </section>
        </form>
    </section>
<?php endif; ?>
