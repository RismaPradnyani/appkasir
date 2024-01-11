<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">User</h1>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">
              <a href="#">Data Utama</a>
            </li>
            <li class="breadcrumb-item active">User</li>
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
        <h5>Data User</h5>
      </div>
      <div class="card-body">
        <table id="example1" class="table table-hover">
          <thead class="bg-dark">
            <th>ID</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Password</th>
            <th>Hak Akses</th>
            <th>Aksi</th>
          </thead>
          <?php
          $sql = "SELECT * FROM user";
          $query = mysqli_query($koneksi, $sql);
          while ($kolom = mysqli_fetch_array($query)) {
          ?>
            <tr>
              <td><?= $kolom['id_user']; ?></td>
              <td><?= $kolom['nama']; ?></td>
              <td><?= $kolom['username']; ?></td>
              <td><?= $kolom['password']; ?></td>
              <td><?= $kolom['hak_akses']; ?></td>

              <td>
                <!-- tombol edit -->
                <a href="#" data-toggle="modal" data-target="#modalUbah<?= $kolom['id_user']; ?>">
                  <i class="fas fa-edit" style="color: primary;"></i>
                </a>
                &nbsp;
                <!-- Tombol hapus -->
                <a onclick="return confirm('Yakin akan menghapus data ini?')" href="aksi/user.php?aksi=hapus&id_user=<?= $kolom['id_user']; ?>">
                  <i class="fas fa-trash" style="color: red;"></i></a>
              </td>
            </tr>

            <!-- Modal ubah periode -->
            <div class="modal fade" id="modalUbah<?= $kolom['id_user']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="aksi/user.php" method="post">
                      <input type="hidden" name="aksi" value="ubah">
                      <input type="hidden" name="id_user" value="<?= $kolom['id_user']; ?>">

                      <label for="nama">Nama</label>
                      <input type="text" name="nama" value="<?= $kolom['nama']; ?>" class="form-control" required="required">

                      <label for="username" class="mt-3">Username</label>
                      <input type="text" name="username" value="<?= $kolom['username']; ?>" class="form-control" required="required">
                      <br>
                      <label for="password">Password</label>
                      <input type="password" name="password" value="<?= $kolom['password']; ?>" class="form-control" required="required">
                      <br>
                      <label for="hak_akses">Hak Akses</label>
                      <select class="form-control" id="hak_akses" name="hak_akses" required>
                        <option value="<?= $kolom['hak_akses'] ?>"><?= $kolom['hak_akses'] ?></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                      </select>
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
          Tambah User</button>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="aksi/user.php" method="post">
          <input type="hidden" name="aksi" value="tambah">
          <label for="nama">Nama</label>
          <input type="text" name="nama" class="form-control" required="required">

          <label for="username" class="mt-3">Username</label>
          <input type="text" name="username" class="form-control" required="required">
          <br>
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control" required="required">
          <br>
          <label for="hak_akses">Hak Akses</label>
          <select class="form-control" id="hak_akses" name="hak_akses" required>
            <option value="1">1</option>
            <option value="2">2</option>
          </select>
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