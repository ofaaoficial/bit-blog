   <!-- Main Content -->
   <div class="main-content" >
        <section class="section" style="margin-top: -90px;">
          <div class="section-header">
            <h1>Editar usuario</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Usuarios</a></div>
              <div class="breadcrumb-item">Editar</div>
            </div>
          </div>

          <div class="section-body">
            
            <div class="card">
              <div class="card-header">
              <a href="?controller=usuario" class="btn btn-primary"> Cancelar</a>
              </div>
              <div class="card-body">
             
              <form action="?controller=usuario&method=actualizar&id=<?= $usuario->id ?>" method="POST">
        <section class="form-group">
            <label for="name">Nombres</label>
            <input type="text" name="nombres" id="nombres" required class="form-control" autofocus value="<?= $usuario->nombres ?>">
        </section>
        <section class="form-group">
            <label for="name">Apellidos</label>
            <input type="text" name="apellidos" id="apellidos" required class="form-control" value="<?= $usuario->apellidos ?>">
        </section>
        <section class="form-group">
            <label for="email">Correo</label>
            <input type="email" name="correo" id="correo" required class="form-control" value="<?= $usuario->correo ?>">
        </section>
        <section class="form-group">
            <label for="rol_id">Rol</label>
            <select name="rol_id" id="rol_id" class="form-control" required>
                <option value="">-- Seleccionar rol --</option>
                <?php foreach ($roles as $rol): ?>
                    <option value="<?= $rol->id ?>" <?php if($rol->id === $usuario->rol_id): ?> selected <?php endif; ?> ><?= $rol->nombre ?></option>
                <?php endforeach; ?>
            </select>
        </section>
        <section class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" name="contrasenia" id="contrasenia" required class="form-control">
        </section>
        <section class="form-group">
            <label for="text">Sitio web</label>
            <input type="text" name="sitio_web" id="sitio_web" required class="form-control" value="<?= $usuario->sitio_web ?>">
        </section>
        <section class="form-group">
            <label for="text">Direccion</label>
            <input type="text" name="direccion" id="direccion" required class="form-control" value="<?= $usuario->direccion ?>">
        </section>
        <section class="form-group">
            <label for="text">Celular</label>
            <input type="text" name="celular" id="celular" required class="form-control" value="<?= $usuario->celular ?>">
        </section>
        <section class="form-group">
            <label for="text">Profesion</label>
            <input type="text" name="profesion" id="profesion" required class="form-control" value="<?= $usuario->profesion ?>">
        </section>
        <section class="form-group">
            <input type="submit" value="Registar" class="btn btn-primary">
            <a href="?controller=usuario" class="btn btn-link ml-2">Volver</a>
        </section>
    </form> 
              </div>
        
            </div>
          </div>
        </section>
      </div>
     

