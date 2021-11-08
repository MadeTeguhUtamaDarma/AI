<?php 
$dbname='db_tamu';
$host='localhost';
$password='';
$username='root';

//koneksi ke MySQL

$conn = mysqli_connect($host, $username, $password, $dbname);
if (mysqli_connect_errno()) {
	echo "koneksi gagal";
	exit();
}
?>