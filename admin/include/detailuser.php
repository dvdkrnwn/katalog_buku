    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-user-tie"></i> Detail Data User</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php?include=user">Data User</a></li>
              <li class="breadcrumb-item active">Detail Data User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header">
          <div class="card-tools">
            <a href="index.php?include=user" class="btn btn-sm btn-warning float-right">
              <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <tbody>
              <?php
                      include('../koneksi/koneksi.php');
                      if (isset($_GET['ids'])) {
                        $id_user = $_GET['ids'];
                        

                        //get foto
                        $sql_f = "SELECT `foto` FROM `user` WHERE `id_user`='$id_user'";
                        $query_f = mysqli_query($koneksi,$sql_f);
                        while($data_f = mysqli_fetch_row($query_f)){
                        $foto = $data_f[0];
                        }

                        $sql_c = "SELECT `nama`, `email`,`username`,`password`,`level` FROM `user` WHERE `id_user`='$id_user'";
                        
                        $query_c = mysqli_query($koneksi,$sql_c);
                        while ($data_c =  mysqli_fetch_row($query_c)) {
                          $nama = $data_c[0];
                          $email = $data_c[1];
                          $username = $data_c[2];
                          $password = $data_c[3];
                          $level = $data_c[4];
                        }
                      }
                    ?>
              <tr>
                <td colspan="2"><i class="fas fa-user-circle"></i> <strong>Data User<strong></td>
              </tr>
              <tr>
                <td><strong>Foto User<strong></td>
                <td><img src="foto/<?php echo $foto;?>" class="img-fluid" width="200px;"></td>
              </tr>
              <tr>
                <td width="20%"><strong>Nama<strong></td>
                <td width="80%"><?php echo $nama?></td>
              </tr>
              <tr>
                <td width="20%"><strong>Email<strong></td>
                <td width="80%"><?php echo $email?></td>
              </tr>
              <tr>
                <td width="20%"><strong>Level<strong></td>
                <td width="80%"><?php echo $level?></td>
              </tr>
              <tr>
                <td width="20%"><strong>Username<strong></td>
                <td width="80%"><?php echo $username?></td>
              </tr>
              <?php
                      ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">&nbsp;</div>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->