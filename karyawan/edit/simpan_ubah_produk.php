<?php 
	include "../conn/koneksi.php";

        $id_produk  = $_POST['id_produk'];
        $nama_produk = $_POST['nama_produk'];
		$kategori = $_POST['kategori'];
		$lokasi = $_POST['lokasi'];


        $sql="UPDATE tb_produk SET nama_produk ='$nama_produk', kategori='$kategori', lokasi='$lokasi'
        WHERE id_produk = '$id_produk'";
        $update=mysqli_query($koneksi, $sql);
        if ($update){
            header("location: ../produk.php");
        }else{
           echo "<script>alert('Produk gagal diubah!'); window.location = 'edit_produk.php'</script>";	
        }

?>