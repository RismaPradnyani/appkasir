<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Produk</h1>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">
              <a href="#">Data Utama</a>
            </li>
            <li class="breadcrumb-item active">Produk</li>
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
        <h5>Data Produk</h5>
      </div>
      <div class="card-body">
        <table id="example1" class="table table-hover">
          <thead class="bg-dark">
            <th>ID</th>
            <th>Barcode</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
          </thead>
          <?php
          $sql = "SELECT * FROM produk";
          $query = mysqli_query($koneksi, $sql);
          while ($kolom = mysqli_fetch_array($query)) {
          ?>
            <tr>
              <td><?= $kolom['ProdukID']; ?></td>
              <td><?= $kolom['Barcode']; ?></td>
              <td><?= $kolom['NamaProduk']; ?></td>
              <td><?= number_format($kolom['Harga']);  ?></td>
              <td><?= $kolom['Stok']; ?></td>
              <td>
                <!-- tombol edit -->
                <a href="#" data-toggle="modal" data-target="#modalUbah<?= $kolom['ProdukID']; ?>">
                  <i class="fas fa-edit" style="color: primary;"></i>
                </a>
                &nbsp;
                <!-- Tombol hapus -->
                <a onclick="return confirm('Yakin akan menghapus data ini?')" href="aksi/produk.php?aksi=hapus&ProdukID=<?= $kolom['ProdukID']; ?>">
                  <i class="fas fa-trash" style="color: red;"></i></a>
              </td>
            </tr>

            <!-- Modal ubah periode -->
            <div class="modal fade" id="modalUbah<?= $kolom['ProdukID']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="aksi/produk.php" method="post">
                      <input type="hidden" name="aksi" value="ubah">
                      <input type="hidden" name="ProdukID" value="<?= $kolom['ProdukID']; ?>">

                      <label for="Barcode">Barcode</label>
                      <input type="text" name="Barcode" value="<?= $kolom['Barcode']; ?>" class="form-control" required="required">

                      <label for="nama">Nama</label>
                      <input type="text" name="NamaProduk" value="<?= $kolom['NamaProduk']; ?>" class="form-control" required="required">

                      <label for="Harga" class="mt-3">Harga</label>
                      <input type="text" name="Harga" value="<?= number_format($kolom['Harga']); ?>" class="form-control" required="required">
                      <br>
                      <label for="Stok">Stok</label>
                      <input type="Stok" name="Stok" value="<?= $kolom['Stok']; ?>" class="form-control" required="required">
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
          Tambah Produk</button>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="aksi/produk.php" method="post">
          <input type="hidden" name="aksi" value="tambah">
          <label for="Barcode">Barcode</label>
          <input type="text" name="Barcode" class="form-control" required="required" placeholder="Masukkan Barcode Produk">
          <label for="nama">Nama Produk</label>
          <input type="text" name="NamaProduk" class="form-control" required="required" placeholder="Masukkan Nama Produk">
          <label for="harga" class="mt-3">Harga</label>
          <input type="text" name="Harga" class="form-control" required="required" placeholder="Masukkan Harga Produk">
          <br>
          <label for="stok">Stok</label>
          <input type="text" name="Stok" class="form-control" required="required" placeholder="Masukkan Stok Produk">
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