   <!-- Main Content -->
   <div class="main-content" >
        <section class="section" style="margin-top: -90px;">
          <div class="section-header">
            <h1>Publicaciones</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Publicaciones</a></div>
              <div class="breadcrumb-item">Listar</div>
            </div>
          </div>

          <div class="section-body">
            
            <div class="card">
              <div class="card-header">
              <a href="?controller=publicacion&method=crear" class="btn btn-primary"> Crear</a>
              </div>
              <div class="card-body">
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
                    <button class="btn btn-warning">Editar</button>
                </a>
                <a href="?controller=publicacion&method=borrar&id=<?= $publicacion->id ?>">
                    <button class="btn btn-danger">borrar</button>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
              </div>
              <div class="card-footer bg-whitesmoke">
                 <?php echo count(parent::todo()) ?> Publicaciones
              </div>
            </div>
          </div>
        </section>
      </div>
     
