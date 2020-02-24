   <!-- Main Content -->
   <div class="main-content" >
        <section class="section" style="margin-top: -90px;">
          <div class="section-header">
            <h1>Modificar publicacion</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Publicaciones</a></div>
              <div class="breadcrumb-item">Editar</div>
            </div>
          </div>

          <div class="section-body">
            
            <div class="card">
              <div class="card-header">
              <a href="?controller=publicacion" class="btn btn-primary"> Cancelar</a>
              </div>
              <div class="card-body">
              <form action="?controller=publicacion&method=actualizar&id=<?= $publicacion->id ?>" method="POST">
        <section class="form-group">
            <label for="name">Titulo</label>
            <input type="text" name="titulo" id="titulo" required class="form-control" autofocus value="<?= $publicacion->titulo ?>">
        </section>
        <section class="form-group">
            <label for="rol_id">Categorias</label>
            <select name="categoria_id" id="categoria_id" class="form-control" required>
                <option value="">-- Seleccionar categoria --</option>
                <?php foreach ($categorias as $categoria): ?>
                    <option value="<?= $categoria->id ?>" <?php if($categoria->id == $publicacion->categoria_id): ?> selected <?php endif; ?>><?= $categoria->nombre ?></option>
                <?php endforeach; ?>
            </select>
        </section>
        <section class="form-group">
            <label for="name">Contenido</label>
            <textarea rows="10" name="contenido" id="contenido" required class="form-control"><?= $publicacion->contenido ?></textarea>
        </section>
        <section class="form-group">
            <input type="submit" value="Registar" class="btn btn-primary">
            <a href="?controller=publicacion" class="btn btn-link">Volver</a>
        </section>
    </form>
              </div>
            
            </div>
          </div>
        </section>
      </div>
     

