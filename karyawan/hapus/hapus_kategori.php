<?php
include "../conn/koneksi.php";
$kategori = $_GET['kd'];

$query = mysqli_query($koneksi, "DELETE FROM tb_kategori WHERE id_kategori='$kategori'");
if ($query){
	echo "<script>alert('Produk Berhasil dihapus!'); window.location = '../kategori.php'</script>";	
} else {
	echo "<script>alert('Produk Gagal dihapus!'); window.location = '../kategori.php'</script>";	
}
?>