
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-plus"></i> Tambah Buku</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=buku">Data Buku</a></li>
              <li class="breadcrumb-item active">Tambah Buku</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah Data Buku</h3>
        <div class="card-tools">
          <a href="index.php?include=buku" class="btn btn-sm btn-warning float-right">
          <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      </br></br>
      <div class="col-sm-10">
    <?php if((!empty($_GET['notif']))&&(!empty($_GET['jenis']))){?>
       <?php if($_GET['notif']=="tambahkosong"){?>
          <div class="alert alert-danger" role="alert">Maaf data
               <button class="close" data-dismiss="alert">x</button>
          <?php echo $_GET['jenis'];?> wajib di isi</div>
       <?php }?>
    <?php }?>
</div>

    <form class="form-horizontal" enctype="multipart/form-data" method="post" action="index.php?include=konfirmasi-tambah-buku">
        <div class="card-body">
          <div class="form-group row">
            <label for="foto" class="col-sm-3 col-form-label">Cover Buku</label>
            <div class="col-sm-7">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="cover" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="kategori" class="col-sm-3 col-form-label">Kategori Buku</label>
            <div class="col-sm-7">
              <select name="kategori_buku" class="form-control" id="kategori">
                <option value="">- Pilih Kategori -</option>
                <?php $sql_kategori_buku = mysqli_query($koneksi, "SELECT * FROM kategori_buku") or die (mysqli_error($koneksi));
                  while($data_kategori_buku = mysqli_fetch_array($sql_kategori_buku)){
                    echo '<option value="'.$data_kategori_buku['id_kategori_buku'].'">
                    '.$data_kategori_buku['kategori_buku'].'</option>';
                  }?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="judul" class="col-sm-3 col-form-label">Judul</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="judul" id="judul" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="pengarang" class="col-sm-3 col-form-label">Pengarang</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="pengarang" id="pengarang" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="kategori" class="col-sm-3 col-form-label">Penerbit</label>
            <div class="col-sm-7">
              <select name="penerbit" class="form-control" id="penerbit">
                <option value="">- Pilih penerbit -</option>
                <?php $sql_penerbit = mysqli_query($koneksi, "SELECT * FROM penerbit") or die (mysqli_error($koneksi));
                      while($data_penerbit = mysqli_fetch_array($sql_penerbit)){
                        echo '<option value="'.$data_penerbit['id_penerbit'].'">
                        '.$data_penerbit['penerbit'].'</option>';
                      }?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="tanggal" class="col-sm-3 col-form-label">Tahun Terbit</label>
            <div class="col-sm-7">
              <div class="input-group date">
                <input type="text" class="form-control" name="tanggal" id="datepicker-year"  autocomplete="off"
                value="">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                  </div>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="sinopsis" class="col-sm-3 col-form-label">Sinopsis</label>
            <div class="col-sm-7">
              <textarea class="form-control" name="sinopsis" id="editor1" rows="12"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="tag" class="col-sm-3 col-form-label">Tag</label>
            <div class="col-sm-7">
              <?php $sql_tag = mysqli_query($koneksi, "SELECT * FROM tag") or die (mysqli_error($koneksi));
                while($data_tag = mysqli_fetch_array($sql_tag)){
              echo '<input name="tag[]" type="checkbox" value="'.$data_tag['id_tag'].'">'.$data_tag['tag'].' </br>';
            }?>
            </div>
          </div>
          <!-- <div class="form-group row">
            <label for="tag" class="col-sm-3 col-form-label">Tag</label>
            <div class="col-sm-7">
              <?php $sql_tag = mysqli_query($koneksi, "SELECT * FROM tag") or die (mysqli_error($koneksi));
                    while($data_tag = mysqli_fetch_array($sql_tag)){
                    ?>
                    <input name="tag[]" type="checkbox"><?php echo $data_tag['id_tag'].$data_tag['tag']; ?></br>
                <?php  }?>
            </div>
          </div> -->

          </div>
        </div>

      </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-info float-right"><i class="fas fa-plus"></i> Tambah</button>
          </div>
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.card -->

    </section>
