<?php 
	include "../conn/koneksi.php";

		$nama_produk = $_POST['nama_produk'];
		$kategori = $_POST['kategori'];
		$lokasi = $_POST['lokasi'];
		$waktu = date("d-m-Y");
		$jumlah = 0;

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
					mysqli_query($koneksi, "INSERT INTO tb_produk VALUES (NULL,'$xy','$nama_produk','$kategori','$lokasi','$jumlah','$waktu')");
					header("location:../produk.php?alert=berhasil");
				}else{
					header("location:produk_tambah.php?alert=gagal_ukuran");
				}
			}
	?>