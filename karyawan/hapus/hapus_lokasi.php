<?php
include "../conn/koneksi.php";
$lokasi = $_GET['kd'];

$query = mysqli_query($koneksi, "DELETE FROM tb_lokasi WHERE id_lok='$lokasi'");
if ($query){
	echo "<script>alert('Produk Berhasil dihapus!'); window.location = '../kategori.php'</script>";	
} else {
	echo "<script>alert('Produk Gagal dihapus!'); window.location = '../kategori.php'</script>";	
}
?>