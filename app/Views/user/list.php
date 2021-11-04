<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Lista de Usuarios</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Lista de Usuarios</li>
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

          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Usuario</th>
                <th scope="col">Nombre Apellido</th>
                <th scope="col">mail</th>
                <th scope="col">Admin</th>
                <th scope="col">acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($users as $user): ?>
              <tr>
                <th scope="row"><?= $user->id; ?></th>
                <td><?= $user->username; ?></td>
                <td><?= $user->nombre; ?></td>
                <td><?= $user->email; ?></td>
                <td><?= $user->isAdmin() ? 'SI' : 'NO'; ?></td>
                <td>
                  <a href="<?=  base_url('user/delete/'. $user->id ) ;?>" class="btn btn-outline-danger btn-sm">
                      <i class="fas fa-trash-alt"></i>
                  </a>
                </td>
              </tr>

              <?php endforeach; ?>
              
            </tbody>
          </table>
           
          <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->








