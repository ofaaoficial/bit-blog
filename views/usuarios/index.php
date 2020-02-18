<h1>Lista de usuarios</h1>

<a href="?controller=usuario&method=crear">
    <button class="btn btn-green">Crear</button>
</a>
<table class="table">
    <thead>
    <th>id</th>
    <th>nombre</th>
    <th>profesion</th>
    <th>celular</th>
    <th>rol</th>
    <th>sitio web</th>
    <th>Opciones</th>
    </thead>
    <tbody>
    <?php foreach (parent::todo() as $usuario): ?>
        <tr>
            <td><?= $usuario->id ?></td>
            <td><?= "{$usuario->nombres} {$usuario->apellidos}" ?></td>
            <td><?= $usuario->profesion ?></td>
            <td><?= $usuario->celular ?></td>
            <td><?= $usuario->rol ?></td>
            <td><?= $usuario->sitio_web ?></td>
            <td width="200" class="table__options">
                <a href="?controller=usuario&method=editar&id=<?= $usuario->id ?>">
                    <button class="btn btn-outline-green">Editar</button>
                </a>
                <a href="?controller=usuario&method=borrar&id=<?= $usuario->id ?>">
                    <button class="btn btn-outline-red">Borrar</button>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

