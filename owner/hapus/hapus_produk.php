<?php
include "../conn/koneksi.php";
$id_produk = $_GET['kd'];

$query = mysqli_query($koneksi, "DELETE FROM tb_produk WHERE id_produk='$id_produk'");
if ($query){
	echo "<script>alert('Produk Berhasil dihapus!'); window.location = '../produk.php'</script>";	
} else {
	echo "<script>alert('Produk Gagal dihapus!'); window.location = '../produk.php'</script>";	
}
?>