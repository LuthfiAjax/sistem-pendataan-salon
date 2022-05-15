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
            <form action="simpan_kategori.php" method="POST" enctype="multipart/form-data">
              <div class="text-center">
                <h1 class="text-light">Salon Asih</h1>
                <p>Tambah Kategori</p>
              </div>
              <div class="mb-3">
                <label for="nama" class="form-label">Nama Kategori</label>
                <input type="text" class="form-control" id="Kategori" name="Kategori" required>
              </div>
              <button type="submit" class="btn btn-info" name="register">Tambah</button>
            </form>
            <div>
                <hr>
            </div>
            <form action="simpan_lokasi.php" method="POST" enctype="multipart/form-data">
              <div class="text-center">
                <h1 class="text-light"></h1>
                <p>Tambah Lokasi Simpan</p>
              </div>
              <div class="mb-3">
                <label for="nama" class="form-label">Nama Lokasi Simpan</label>
                <input type="text" class="form-control" id="lokasi" name="lokasi" required>
              </div>
              <button type="submit" class="btn btn-info" name="register">Tambah</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  </body>
</html>