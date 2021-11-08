<?php 
$dbname='db_tamu';
$host='localhost';
$password='';
$username='root';
  
$cnn = mysqli_connect($host, $username, $password, $dbname);
if (!$cnn) {
	die("koneksi failed :".mysqli_connect_error());
}
$sql="CREATE TABLE bukutamu (
	id integer not null auto_increment,
	nama varchar(25),
	email varchar(50),
	url varchar(100),
	komentar text,
	constraint pk_bukutamu primary key(id))";
if (mysqli_query($cnn, $sql)) {
	echo "table berhasil";
}else{
	echo "table gagal : ".mysqli_error($cnn);
}mysqli_close($cnn);
?>