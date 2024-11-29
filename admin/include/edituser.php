<?php
  if (isset($_GET['ids'])) {
    $id_user = $_GET['ids'];
    //get data user
    $sql_c = "SELECT `id_user`,`nama`, `email`,`username`,`password`,`level` FROM `user` WHERE `id_user`='$id_user'";
    
    $query_c = mysqli_query($koneksi,$sql_c);
    while ($data_c =  mysqli_fetch_row($query_c)) {
      $id_user = $data_c[0];
      $nama = $data_c[1];
      $email = $data_c[2];
      $username = $data_c[3];
      $password = $data_c[4];
      $level = $data_c[5];
    }
  }
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h3><i class="fas fa-edit"></i> Edit Data User</h3>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php?include=user">Data User</a></li>
          <li class="breadcrumb-item active">Edit Data User</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title" style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Data User</h3>
      <div class="card-tools">
        <a href="index.php?include=user" class="btn btn-sm btn-warning float-right"><i
            class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
      </div>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    </br>
    <?php if(!empty($_GET['notif'])){?>
    <?php if($_GET['notif']=="editkosong"){?>
    <div class="alert alert-danger" role="alert">
      Maaf data kategori buku wajib di isi</div>
    <?php }?>
    <?php }?>
    <form class="form-horizontal" action="index.php?include=konfirmasi-edit-user&ids=<?php echo $id_user;?> "
      method="post" enctype="multipart/form-data">
      <div class="card-body">
        <div class="form-group row">
          <label for="foto" class="col-sm-12 col-form-label"><span class="text-info"><i class="fas fa-user-circle"></i>
              <u>Data User</u></span></label>
        </div>

        <div class="form-group row">
          <label for="foto" class="col-sm-3 col-form-label">Foto </label>
          <div class="col-sm-7">
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="foto" id="customFile">
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="nama" class="col-sm-3 col-form-label">Nama</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $nama;?>">
            <input type="hidden" class="form-control" name="id" id="nama" value="<?php $id_user ;?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="email" class="col-sm-3 col-form-label">Email</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="email" id="email" value="<?php echo $email;?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="username" class="col-sm-3 col-form-label">Username</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="username" id="username" value="<?php echo $username;?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="password" class="col-sm-3 col-form-label">Password</label>
          <div class="col-sm-7">
            <input type="password" class="form-control" name="password" id="password" value="">
            <span class="text-danger" style="font-weight:lighter;font-size:12px">
              *Jangan diisi jika tidak ingin mengubah password</span>
          </div>
        </div>
        <div class="form-group row">
          <label for="level" class="col-sm-3 col-form-label">Level</label>
          <div class="col-sm-7">
            <select class="form-control" id="jurusan" name="level">
              <option value="Superadmin" <?php if ($level=="Superadmin") {?>selected <?php } ?>>Superadmin</option>
              <option value="Admin" <?php if ($level=="Admin") {?> selected <?php } ?>>Admin</option>
            </select>
          </div>
        </div>

      </div>
  </div>

  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    <div class="col-sm-12">
      <button type="submit" class="btn btn-info float-right"><i class="fas fa-save"></i> Simpan</button>
    </div>
  </div>
  <!-- /.card-footer -->
  </form>
  </div>
  <!-- /.card -->

</section>
<!-- /.content -->