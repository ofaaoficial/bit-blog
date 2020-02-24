
   <!-- Main Content -->
   <div class="main-content" >
        <section class="section" style="margin-top: -90px;">
          <div class="section-header">
            <h1>Registrar categorias</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Categorias</a></div>
              <div class="breadcrumb-item">Crear</div>
            </div>
          </div>

          <div class="section-body">
            
            <div class="card">
              <div class="card-header">
              <a href="?controller=categoria" class="btn btn-primary"> Cancelar</a>
              </div>
              <div class="card-body">
                   
              <form action="?controller=categoria&method=almacenar" method="POST">
        <section class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="nombre" id="nombre" required class="form-control" autofocus>
        </section>
        <section class="form-group">
            <label for="name">Descripcion</label>
            <input type="text" name="descripcion" id="descripcion" required class="form-control">
        </section>
        <section class="form-group">
            <input type="submit" value="Registar" class="btn btn-primary">
            <a href="?controller=categoria" class="btn btn-link ml-2">Volver</a>
        </section>
    </form>
              </div>
        
            </div>
          </div>
        </section>
      </div>
     




