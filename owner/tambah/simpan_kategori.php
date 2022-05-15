<?php 
	include "../conn/koneksi.php";

        $Kategori  = $_POST['Kategori'];

        // tambah data pada tabel TB masuk
        $add="INSERT INTO tb_Kategori VALUES (NULL,'$Kategori')";
        $masuk=mysqli_query($koneksi, $add);
        if ($masuk){
            header("location: ../kategori.php");
        }else{
           echo "<script>alert('Produk gagal diubah!'); window.location = 'kategorilokasi.php'</script>";	
        }
?>