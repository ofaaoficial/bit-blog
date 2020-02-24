<?php foreach ($publicaciones as $publicacion) : ?>
    <section class="panel publicacion">
        <span class="categoria"><?= $publicacion->nombre_categoria ?></span>
        <h1 class="titulo"><?= $publicacion->titulo; ?></h1>
        <p class="contenido"><?= $publicacion->contenido; ?></p>

        <article class="publicacion_pie">
            <span class="creador"><?= $publicacion->creador ?></span>
            <a class="ver"
               href="http://localhost/Bit-Blog/?controller=publicacion&method=ver&id=<?= $publicacion->id ?>">Ver
                más</a>
        </article>
    </section>
<?php endforeach; ?>

