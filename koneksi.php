<?php
$host = "localhost";	//nama host
$user = "radius";	//username phpMyAdmin
$pass = "mysqlsecret";	//password phpMyAdmin
$name = "radius";	//nama database

$koneksi = mysql_connect($host, $user, $pass) or die("Koneksi ke database gagal!");
mysql_select_db($name, $koneksi) or die("Tidak ada database yang dipilih!");
?>
