<h1>Lista de publicaciones</h1>

<a href="?controller=publicacion&method=crear">
    <button class="btn btn-green">Crear</button>
</a>
<table class="table">
    <thead>
    <th>id</th>
    <th>titulo</th>
    <th>fecha de creacion</th>
    <th>creador</th>
    <th>Opciones</th>
    </thead>
    <tbody>
    <?php foreach(parent::todo() as $publicacion):  ?>
        <tr>
            <td><?= $publicacion->id ?></td>
            <td><?= $publicacion->titulo ?></td>
            <td><?= $publicacion->fecha_creacion ?></td>
            <td><?= $publicacion->creador ?></td>
            <td width="200" class="table__options">
                <a href="?controller=publicacion&method=editar&id=<?= $publicacion->id ?>">
                    <button class="btn btn-outline-green">Editar</button>
                </a>
                <a href="?controller=publicacion&method=borrar&id=<?= $publicacion->id ?>">
                    <button class="btn btn-outline-red">borrar</button>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

