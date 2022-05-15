<?php 
	include "../conn/koneksi.php";
    date_default_timezone_set("Asia/Jakarta");

        $id_produk  = $_POST['id_produk'];
        $nama_produk  = $_POST['nama_produk'];
        $stok = $_POST['stok'];
		$tambah = $_POST['tambah'];

        $tgl = date("d F Y");
        $jam = date("H:i:s");

		$hasil = $stok+$tambah;
        $jumlah = $hasil;

        // update stok
        $sql="UPDATE tb_produk SET jumlah ='$jumlah' WHERE id_produk = '$id_produk'";
        $update=mysqli_query($koneksi, $sql);
        if ($update){
            header("location: ../produk.php");
        }else{
           echo "<script>alert('Produk gagal diubah!'); window.location = 'tambah_stok.php'</script>";	
        }

        // tambah data pada tabel TB masuk
        $add="INSERT INTO tb_produk_masuk VALUES (NULL,'$nama_produk','$stok','$tambah','$tgl','$jam')";
        $masuk=mysqli_query($koneksi, $add);
        if ($masuk){
            header("location: ../produk.php");
        }else{
           echo "<script>alert('Produk gagal diubah!'); window.location = 'tambah_stok.php'</script>";	
        }



?>