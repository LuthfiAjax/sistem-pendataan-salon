<?php
include "../conn/koneksi.php";
$id_akses = $_GET['kd'];

$query = mysqli_query($koneksi, "DELETE FROM tb_akses WHERE id_akses='$id_akses'");
if ($query){
	echo "<script>alert('Produk Berhasil dihapus!'); window.location = '../hak_akses.php'</script>";	
} else {
	echo "<script>alert('Produk Gagal dihapus!'); window.location = '../hak_akses.php'</script>";	
}
?>