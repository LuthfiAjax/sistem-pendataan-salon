<?php
 
// Konfigurasi Database
$host       = 'localhost'; // host
$username   = 'root'; // username database
$password   = ''; // password database
$dbname     = 'salon'; // nama database
 
$koneksi = mysqli_connect($host, $username, $password, $dbname);
 
if ($koneksi) {
    //  echo "Database Terhubung";
} else {
    echo "Database Error";
}
?>