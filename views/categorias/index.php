
   <!-- Main Content -->
   <div class="main-content" >
        <section class="section" style="margin-top: -90px;">
          <div class="section-header">
            <h1>Categorias</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Categorias</a></div>
              <div class="breadcrumb-item">Listar</div>
            </div>
          </div>

          <div class="section-body">
            
            <div class="card">
              <div class="card-header">
              <a href="?controller=categoria&method=crear" class="btn btn-primary"> Crear</a>
              </div>
              <div class="card-body">
                   
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
                    <button class="btn btn-warning">Editar</button>
                </a>
                <a  href="?controller=categoria&method=borrar&id=<?= $categoria->id ?>">
                    <button class="btn btn-danger">Borrar</button>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
              </div>
              <div class="card-footer bg-whitesmoke">
                 <?php echo count(parent::todo()) ?> Categorias
              </div>
            </div>
          </div>
        </section>
      </div>
     



