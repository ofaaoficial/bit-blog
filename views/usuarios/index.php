
   <!-- Main Content -->
   <div class="main-content" >
        <section class="section" style="margin-top: -90px;">
          <div class="section-header">
            <h1>Lista de usuarios</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Usuarios</a></div>
              <div class="breadcrumb-item">Listar</div>
            </div>
          </div>

          <div class="section-body">
            
            <div class="card">
              <div class="card-header">
              <a href="?controller=usuario&method=crear" class="btn btn-primary"> Crear</a>
              </div>
              <div class="card-body">
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
                    <button class="btn btn-warning">Editar</button>
                </a>
                <a href="?controller=usuario&method=borrar&id=<?= $usuario->id ?>">
                    <button class="btn btn-danger">Borrar</button>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
              </div>
              <div class="card-footer bg-whitesmoke">
                 <?php echo count(parent::todo()) ?> Usuarios
              </div>
            </div>
          </div>
        </section>
      </div>
     

