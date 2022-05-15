<!-- Fungsi Session -->
<?php 
session_start();
if (empty($_SESSION['username'])){
	header('location:../index.php');	
} else {
	include "conn/koneksi.php";
?>
<!-- End -->

<?php
    require "conn/koneksi.php";
    error_reporting(0);

    // ambil data
    $get1 = mysqli_query($koneksi, "select * from tb_akses where hak_akses='karyawan'");
    $count1 = mysqli_num_rows($get1); //menghitung jumlah kolom 

    // ambil data
    $get2 = mysqli_query($koneksi, "select * from tb_produk");
    $count2 = mysqli_num_rows($get2); //menghitung jumlah kolom 

    // ambil data
    $get3 = mysqli_query($koneksi, "select * from tb_produk_masuk");
    $count3 = mysqli_num_rows($get3); //menghitung jumlah kolom 

     // ambil data
    $get4 = mysqli_query($koneksi, "select * from tb_produk_keluar");
    $count4 = mysqli_num_rows($get4); //menghitung jumlah kolom 

     // ambil data
    $get5 = mysqli_query($koneksi, "select * from tb_lokasi");
    $count5 = mysqli_num_rows($get4); //menghitung jumlah kolom 

    
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <title>SSBKU Dashboard</title>
</head>
      <!-- Fungsi Waktu Session -->
      <?php
            $timeout = 10; // Set timeout minutes
            $logout_redirect_url = "../index.php"; // Set logout URL

            $timeout = $timeout * 60; // Converts minutes to seconds
            if (isset($_SESSION['start_time'])) {
                $elapsed_time = time() - $_SESSION['start_time'];
                if ($elapsed_time >= $timeout) {
                    session_destroy();
                    echo "<script>alert('Sesi Anda Telah Habis!'); window.location = '$logout_redirect_url'</script>";
                }
            }
            $_SESSION['start_time'] = time();
            ?>
            <?php } ?>
            <!-- End -->
<body>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-user-secret me-2"></i>Salon Asih</div>
            <div class="list-group list-group-flush my-3">
                <a href="dashboard.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="produk.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-project-diagram me-2"></i>Produk</a>
                <a href="kategori.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-chart-line me-2"></i>Kategori & Rak</a>
                <a href="laporan.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-paperclip me-2"></i>Laporan</a>
                <a href="logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Kategori Dan Lokasi</h2>
                </div>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item ">
                            <a class="nav-link -toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>Selamat Datang <b><?php echo $_SESSION['nama'];?></b>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                <a class="btn btn-primary mb-3" href="tambah/kategorilokasi.php"><i class="fa fa-plus-square "></i> Tambah Kategori dan Lokasi barang</a>
                <div class="row my-5">
                    <h3 class="fs-4 mb-3">Kategori Barang</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr align="center">
                                    <th scope="col" width="10">No. </th>
                                    <th scope="col">ID Kategori</th>
                                    <th scope="col">Nama Kategori</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no=0;
                                    $data = mysqli_query($koneksi,"select * from tb_kategori");
                                    while($d = mysqli_fetch_array($data)){
                                        $no++;
                                        ?>
                                <tr align="center">
                                    <td><?php echo "$no" ?></td>                         
                                    <td><?php echo $d['id_kategori']; ?></td>                           
                                    <td><?php echo $d['nama_kategori']; ?></td>                            
                                    <td><div id="thanks">
                                        <a onclick="return confirm ('Yakin hapus Kategori <?php echo $d['nama_kategori'];?>.?');" class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-toggle="tooltip" title="Hapus Produk" href="hapus/hapus_kategori.php?hal=hapus&kd=<?php echo $d['id_kategori'];?>"><span class="fa fa-lg fa-trash"> </span></a>
                                    </td>                           
                                </tr>
                                <?php
                                    }
			                    ?>
                              </tbody>  
                        </table>
                    </div>

                    <!-- Lokasi Simpan -->
                    <h3 class="fs-4 mb-3">Lokasi Penyimpanan Barang</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr align="center">
                                    <th scope="col" width="10">No. </th>
                                    <th scope="col">ID Penyimpanan</th>
                                    <th scope="col">Nama Lokasi Simpan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no=0;
                                    $data = mysqli_query($koneksi,"select * from tb_lokasi");
                                    while($d = mysqli_fetch_array($data)){
                                        $no++;
                                        ?>
                                <tr align="center">
                                    <td><?php echo "$no" ?></td>                         
                                    <td><?php echo $d['id_lok']; ?></td>                           
                                    <td><?php echo $d['nama_lokasi']; ?></td>                            
                                    <td><div id="thanks">
                                        <a onclick="return confirm ('Yakin hapus Lokasi <?php echo $d['nama_lokasi'];?>.?');" class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-toggle="tooltip" title="Hapus Produk" href="hapus/hapus_lokasi.php?hal=hapus&kd=<?php echo $d['id_lok'];?>"><span class="fa fa-lg fa-trash"> </span></a>
                                    </td>                           
                                </tr>
                                <?php
                                    }
			                    ?>
                              </tbody>  
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>