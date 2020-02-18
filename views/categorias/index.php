<h1>Lista de categorias</h1>

<a href="?controller=categoria&method=crear">
    <button class="btn btn-green">Crear</button>
</a>
<table class="table">
    <thead>
    <th>id</th>
    <th>nombre</th>
    <th>descripcion</th>
    <th>Opciones</th>
    </thead>
    <tbody>
    <?php foreach (parent::todo() as $categoria): ?>
        <tr>
            <td><?= $categoria->id ?></td>
            <td><?= $categoria->nombre ?></td>
            <td><?= $categoria->descripcion ?></td>
            <td width="200" class="table__options">
                <a href="?controller=categoria&method=editar&id=<?= $categoria->id ?>">
                    <button class="btn btn-outline-green">Editar</button>
                </a>
                <a href="?controller=categoria&method=borrar&id=<?= $categoria->id ?>">
                    <button class="btn btn-outline-red">Borrar</button>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

