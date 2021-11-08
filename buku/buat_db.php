<?php
$conn = mysqli_connect('localhost','root');
if (mysqli_connect_errno()) {
echo "koneksi gagal";
}
$sql="CREATE DATABASE db_tamu";
if (mysqli_query($conn, $sql)) {	echo "data base berhasil di buat";
}else{
	echo "gagal di buat :".mysqli_error($conn);
}mysqli_close($conn);
?>
