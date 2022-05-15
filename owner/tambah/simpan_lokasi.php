<?php 
	include "../conn/koneksi.php";

        $lokasi  = $_POST['lokasi'];

        // tambah data pada tabel TB masuk
        $add="INSERT INTO tb_lokasi VALUES (NULL,'$lokasi')";
        $masuk=mysqli_query($koneksi, $add);
        if ($masuk){
            header("location: ../kategori.php");
        }else{
           echo "<script>alert('Produk gagal diubah!'); window.location = 'kategorilokasi.php'</script>";	
        }
?>