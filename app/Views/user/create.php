<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Formulario de Usuario</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Crear Usuario</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">

    <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
          <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Formulario de Usuario</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="<?= base_url('user/save') ?>" method="POST">
              <input type="hidden" name="id" value="" >
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputNombre" class="col-sm-3 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputNombre" name="nombre">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputApellido" class="col-sm-4 col-form-label">Apellido</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputApellido" name="apellido">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputUsername" class="col-sm-4 col-form-label">Nombre de Usuario</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputUsername" name="username" required>
                        </div>
                  </div>

                  <div class="form-group row">
                  <label for="inputEmail" class="col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="inputEmail" name="email">
                    </div>
                  </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Guardar</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            </div>
        </div>
    </div>


</div>
<!-- /.content -->