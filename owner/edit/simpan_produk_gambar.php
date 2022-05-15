<?php 
	include "../conn/koneksi.php";

		$id_produk = $_POST['id_produk'];

		$rand = rand();
		$ekstensi =  array('png','jpg','jpeg');
		$filename = $_FILES['gambar']['name'];
		$ukuran = $_FILES['gambar']['size'];
		$ext = pathinfo($filename, PATHINFO_EXTENSION);

			if(!in_array($ext,$ekstensi) ) {
				header("location:produk_tambah.php?alert=gagal_ekstensi");
			}else{
				if($ukuran < 1044070){
					$xy = $rand.'_'.$filename;
					move_uploaded_file($_FILES['gambar']['tmp_name'], '../../gambar/'.$rand.'_'.$filename);
					mysqli_query($koneksi, "UPDATE tb_produk SET gambar ='$xy' WHERE id_produk = '$id_produk'");
					header("location:../produk.php?alert=berhasil");
				}else{
					header("location:produk_tambah.php?alert=gagal_ukuran");
				}
			}
	?>