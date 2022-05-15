<?php 
    include "../conn/koneksi.php";
    $lokasi = mysqli_query($koneksi, "SELECT * FROM tb_lokasi");
    $kategori = mysqli_query($koneksi, "SELECT * FROM tb_kategori");
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
            <form action="tambah_proses.php" method="POST" enctype="multipart/form-data">
              <div class="text-center">
                <h1 class="text-light">Salon Asih</h1>
                <p>Menambah Stok Produk pada kategori "<?php echo $d['kategori']; ?>"</p>
              </div>
              <div class="mb-3">
                <label for="nama" class="form-label">ID Produk </label>
                <input readonly="readonly" type="text" class="form-control" id="id_produk" name="id_produk" value="<?php echo $d['id_produk']; ?>" required>
              </div>
              <div class="mb-3">
                <label for="nama" class="form-label">Nama Produk </label>
                <input readonly="readonly" type="text" class="form-control" id="nama_produk" name="nama_produk" value="<?php echo $d['nama_produk']; ?>" required>
              </div>
              <div class="mb-3">
                <label for="nama" class="form-label">Stok Saat ini</label>
                <input readonly="readonly" type="text" class="form-control" id="stok" name="stok" value="<?php echo $d['jumlah']; ?>" required>
              </div>
              <div class="mb-3">
                <label for="nama" class="form-label">Jumlah Stok ditambah </label>
                <input type="number" class="form-control" id="tambah" name="tambah" required>
              </div>
              <button type="submit" class="btn btn-success" name="hitung">Tambahkan Stok</button>
            </form>
            </div>
        </div>
      </div>
    </div>
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  </body>
</html>