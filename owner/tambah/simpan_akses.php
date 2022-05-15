<?php 
	include "../conn/koneksi.php";

        $username  = $_POST['username'];
        $password  = $_POST['password'];
        $nama  = $_POST['nama'];
        $hak_akses  = $_POST['hak_akses'];

        // tambah data pada tabel TB masuk
        $add="INSERT INTO tb_akses VALUES (NULL,'$username','$password','$nama','$hak_akses')";
        $masuk=mysqli_query($koneksi, $add);
        if ($masuk){
            header("location: ../hak_akses.php");
        }else{
           echo "<script>alert('Produk gagal diubah!'); window.location = 'akses.php'</script>";	
        }
?>