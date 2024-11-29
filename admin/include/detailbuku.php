<?php
include('../koneksi/koneksi.php');
$id_buku = $_GET['data'];
$level = $_SESSION['level'];
//get profil
$sql = "SELECT * FROM buku
          INNER JOIN kategori_buku ON buku.id_kategori_buku = kategori_buku.id_kategori_buku
          INNER JOIN penerbit ON buku.id_penerbit= penerbit.id_penerbit WHERE id_buku = $id_buku";
 //echo $sql;
$query = mysqli_query($koneksi, $sql);
while($data = mysqli_fetch_array($query)){


?>
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h3><i class="fas fa-user-tie"></i> Detail Data Buku</h3>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="index.php?include=buku">Data Buku</a></li>
          <li class="breadcrumb-item active">Detail Data Buku</li>
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
        <a href="index.php?include=buku" class="btn btn-sm btn-warning float-right">
          <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <tbody>
          <tr>
            <td><strong>Cover Buku<strong></td>
            <td><img src="cover/<?php echo $data['cover'];?>" class="img-fluid" width="200px;"></td>
          </tr>
          <tr>
            <td width="20%"><strong>Kategori Buku<strong></td>
            <td width="80%"><?= $data['kategori_buku'] ?></td>
          </tr>
          <tr>
            <td width="20%"><strong>Judul<strong></td>
            <td width="80%"><?= $data['judul'] ?></td>
          </tr>
          <tr>
            <td width="20%"><strong>Pengarang<strong></td>
            <td width="80%"><?= $data['pengarang'] ?></td>
          </tr>
          <tr>
            <td width="20%"><strong>Tahun Terbit<strong></td>
            <td width="80%"><?= $data['tahun_terbit'] ?></td>
          </tr>
          <tr>
            <td><strong>Tag<strong></td>
            <td>
              <ul>
                <?php
                           $sql_tag = mysqli_query($koneksi, "SELECT * FROM tag_buku JOIN tag ON tag_buku.id_tag = tag.id_tag WHERE id_buku = '$data[id_buku]'");
                            while ($data_tag = mysqli_fetch_array($sql_tag)) {
                               ?>
                <li><?= $data_tag['tag'] ?></li>
                <?php } ?>
              </ul>
            </td>
          </tr>
          <tr>
            <td width="20%"><strong>Sinopsis<strong></td>
            <td width="80%"><?= $data['sinopsis'] ?></td>
          </tr>
        </tbody>
      </table>
    </div>
    <?php } ?>
    <!-- /.card-body -->
    <div class="card-footer clearfix">&nbsp;</div>
  </div>
  <!-- /.card -->

</section>