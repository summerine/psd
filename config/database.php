<?php 

date_default_timezone_set("ASIA/JAKARTA");

$server = "localhost";
$username = "root";
$password = "poland";
$database = "db_sekolah";

$db = mysqli_connect($server, $username, $password, $database);

if (!$db) {
	
	die('Koneksi Database Gagal: ' .mysqli_connect_error());
}

 ?>