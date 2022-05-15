<?php
	include "../conn/koneksi.php";
?>
<!-- Fungsi Menampilkan Data dari Database -->
        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM tb_produk WHERE id_produk='$_GET[kd]'");
        $d  = mysqli_fetch_array($query);
        ?>
<!-- End -->	

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Edit Produk</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-sm rounded text-light" style="background-color: #212529">
            <form action="simpan_produk_gambar.php" method="POST" enctype="multipart/form-data">
              <div class="text-center">
                <h1 class="text-light">Salon Asih</h1>
                <p>Edit Produk</p>
              </div>
              <div class="mb-3">
                <label for="nama" class="form-label">ID Produk</label>
                <input readonly="readonly" type="text" class="form-control" id="id_produk" name="id_produk" value="<?php echo $d['id_produk']; ?>" required>
              </div>
              <div class="mb-3">
                <label for="nama" class="form-label">Gambar Saat Ini</label><br>
                <img src="../../gambar/<?php echo $d['gambar'] ?>" alt="gambar" width="120px" height="120px">
              </div>
              <div class="mb-3">
                <label for="nama" class="form-label">Upload Gambar Baru</label>
                <input type="file" class="form-control" id="gambar" name="gambar" required>
              </div>
              <button type="submit" class="btn btn-info" name="register">Upload</button>
            </form>
            </div>
        </div>
      </div>
    </div>
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  </body>
</html>