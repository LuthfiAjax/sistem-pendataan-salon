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
            <form action="simpan_ubah_produk.php" method="POST" enctype="multipart/form-data">
              <div class="text-center">
                <h1 class="text-light">Salon Asih</h1>
                <p>Edit Produk</p>
              </div>
              <div class="mb-3">
                <label for="nama" class="form-label">ID Produk</label>
                <input readonly="readonly" type="text" class="form-control" id="id_produk" name="id_produk" value="<?php echo $d['id_produk']; ?>" required>
              </div>
              <div class="mb-3">
                <label for="nama" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="<?php echo $d['nama_produk']; ?>" required>
              </div>
              <div class="mb-3">
                <label for="lokasi" class="form-label">kategori</label><br>
                <select class="form-select" aria-label="Default select example" name="kategori" id="kategori" required>
                  <option disabled selected> <?php echo $d['kategori']; ?> </option>
                  <?php while($row = mysqli_fetch_array($kategori)) { ?>
                  <option value="<?=$row['nama_kategori']?>"><?=$row['nama_kategori']?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="mb-3">
                <label for="lokasi" class="form-label">lokasi</label><br>
                <select class="form-select" aria-label="Default select example" name="lokasi" id="lokasi" required>
                  <option disabled selected> <?php echo $d['lokasi']; ?></option>
                  <?php while($row = mysqli_fetch_array($lokasi)) { ?>
                  <option value="<?=$row['nama_lokasi']?>"><?=$row['nama_lokasi']?></option>
                  <?php } ?>
                </select>
              </div>
              <button type="submit" class="btn btn-info" name="register">update</button>
            </form>
            <a onclick="return confirm ('Yakin Ubah Gambar Produk <?php echo $d['nama_produk'];?>.?');" href="edit_produk_gambar.php?hal=edit&kd=<?php echo $d['id_produk'];?>" class="btn btn-block btn-success">(Opsional) Ubah Gambar</a>
          </div>
        </div>
      </div>
    </div>
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  </body>
</html>