<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Pelanggan</h1>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">
              <a href="#">Data Utama</a>
            </li>
            <li class="breadcrumb-item active">Pelanggan</li>
          </ol>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="card-header">
        <h5>Data Pelanggan</h5>
      </div>
      <div class="card-body">
        <table id="example1" class="table table-hover">
          <thead class="bg-dark">
            <th>ID</th>
            <th>Nama Pelanggan</th>
            <th>Alamat</th>
            <th>Nomor Telepon</th>
            <th>Aksi</th>
          </thead>
          <?php
          $sql = "SELECT * FROM pelanggan";
          $query = mysqli_query($koneksi, $sql);
          while ($kolom = mysqli_fetch_array($query)) {
          ?>
            <tr>
              <td><?= $kolom['PelangganID']; ?></td>
              <td><?= $kolom['NamaPelanggan']; ?></td>
              <td><?= $kolom['Alamat']; ?></td>
              <td><?= $kolom['NomorTelepon']; ?></td>
              <td>
                <!-- tombol edit -->
                <a href="#" data-toggle="modal" data-target="#modalUbah<?= $kolom['PelangganID']; ?>">
                  <i class="fas fa-edit" style="color: primary;"></i>
                </a>
                &nbsp;
                <!-- Tombol hapus -->
                <a onclick="return confirm('Yakin akan menghapus data ini?')" href="aksi/pelanggan.php?aksi=hapus&PelangganID=<?= $kolom['PelangganID']; ?>">
                  <i class="fas fa-trash" style="color: red;"></i></a>
              </td>
            </tr>

            <!-- Modal ubah periode -->
            <div class="modal fade" id="modalUbah<?= $kolom['PelangganID']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Pelanggan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="aksi/pelanggan.php" method="post">
                      <input type="hidden" name="aksi" value="ubah">
                      <input type="hidden" name="PelangganID" value="<?= $kolom['PelangganID']; ?>">

                      <label for="nama">Nama Pelanggan</label>
                      <input type="text" name="NamaPelanggan" value="<?= $kolom['NamaPelanggan']; ?>" class="form-control" required="required">
                      <label for="alamat">Alamat</label>
                        <textarea name="Alamat" class="form-control" required rows="3"><?= $kolom['Alamat']; ?></textarea>
                        <br>
                      <input type="NomorTelepon" name="NomorTelepon" value="<?= $kolom['NomorTelepon']; ?>" class="form-control" required="required">
                      <br>
                      <button type="submit" class="btn btn-block bg-dark">
                        <i class="fas fa-save"></i>
                        Simpan
                      </button>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

          <?php
          } // Akhir while
          ?>
        </table>

        <button type="button" class="btn bg-dark btn-block mt-3" data-toggle="modal" data-target="#modaltambah">
          <i class="fas fa-plus"></i>
          Tambah Pelanggan</button>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Modal tambah periode -->
<div class="modal fade" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Pelanggan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="aksi/pelanggan.php" method="post">
          <input type="hidden" name="aksi" value="tambah">
          <label for="nama">Nama Pelanggan</label>
          <input type="text" name="NamaPelanggan" class="form-control" required="required" placeholder="Masukkan Nama Pelanggan">
          <label for="alamat">Alamat</label>
          <textarea name="Alamat" class="form-control" required rows="3"></textarea>
          <br>
          <label for="NomorTelepon">Nomor Telepon</label>
          <input type="text" name="NomorTelepon" class="form-control" required="required" placeholder="Masukkan Nomor Telepon Pelanggan">
          <br>
          <button type="submit" class="btn btn-block bg-dark">
            <i class="fas fa-save"></i>
            Simpan
          </button>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>