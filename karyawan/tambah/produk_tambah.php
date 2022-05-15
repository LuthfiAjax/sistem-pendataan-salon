<?php 
    include "../conn/koneksi.php";
    $lokasi = mysqli_query($koneksi, "SELECT * FROM tb_lokasi");
    $kategori = mysqli_query($koneksi, "SELECT * FROM tb_kategori");
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Tambah Produk</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-sm rounded text-light" style="background-color: #212529">
            <form action="simpan_produk.php" method="POST" enctype="multipart/form-data">
              <div class="text-center">
                <h1 class="text-light">Salon Asih</h1>
                <p>Tambah Produk</p>
              </div>
              <div class="mb-3">
                <label for="nama" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
              </div>
              <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar" required>
              </div>
              <div class="mb-3">
                <label for="lokasi" class="form-label">kategori</label><br>
                <select class="form-select" aria-label="Default select example" name="kategori" id="kategori" required>
                  <option disabled selected> pilih kategori barang </option>
                  <?php while($row = mysqli_fetch_array($kategori)) { ?>
                  <option value="<?=$row['nama_kategori']?>"><?=$row['nama_kategori']?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="mb-3">
                <label for="lokasi" class="form-label">lokasi</label><br>
                <select class="form-select" aria-label="Default select example" name="lokasi" id="lokasi" required>
                  <option disabled selected> Pilih lokasi barang </option>
                  <?php while($row = mysqli_fetch_array($lokasi)) { ?>
                  <option value="<?=$row['nama_lokasi']?>"><?=$row['nama_lokasi']?></option>
                  <?php } ?>
                </select>
              </div>
              <button type="submit" class="btn btn-info" name="register">Tambah</button>
              <button type="reset" class="btn btn-warning" name="register">reset</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  </body>
</html>