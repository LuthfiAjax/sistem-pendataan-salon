<?php
include ("conn/koneksi.php");
date_default_timezone_set('Asia/Jakarta');

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

//$username = mysqli_real_escape_string($username);
//$password = mysqli_real_escape_string($password);

if (empty($username) && empty($password)) {
	header('location:index.php?error1');

} else if (empty($username)) {
	header('location:index.php?error=2');
	
} else if (empty($password)) {
	header('location:index.php?error=3');
	
}

$q = mysqli_query($koneksi, "select * from tb_akses where username='$username' and password='$password'");
$row = mysqli_fetch_array ($q);

if (mysqli_num_rows($q) == 1) {
    $_SESSION['id_akses'] = $row['id_akses'];
	$_SESSION['username'] = $username;
	$_SESSION['nama'] = $row['nama'];  	
	$_SESSION['hak_akses'] = $row['hak_akses'];
	if($_SESSION['hak_akses']=="owner"){
		header('location:owner/dashboard.php');
	}else if($_SESSION['hak_akses']=="karyawan"){
		header('location:karyawan/dashboard.php');
	}
} else {
	header('location:../index.php?error=4');
}
?>