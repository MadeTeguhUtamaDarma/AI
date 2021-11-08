<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Buku Tamu</title>
</head>
<body>
<?php
if (isset($_POST["kirim"])){
	$nama = $_POST["nama"];
	$email = $_POST["email"];
	$url = $_POST["url"];
	$komentar = $_POST["komentar"];

require ("bukutamu.php");
$sql="insert into bukutamu(nama,email,"."url,komentar)"."values ('$nama','$email','url',"."'$komentar')";
mysqli_query($conn, $sql);
$num=mysqli_affected_rows($conn);
if ($num > 0) {
	?>
	<h2>Terima Kasih</h2>
	<strong><?php echo $nama; ?></strong>,
	komentar anada telah di tersimpan.<br/>
	[<a href="tampil_data.php">Lihat Daftar Komentar</a>]
	<br/> <br/>
	<?php  
 }else{
	?>
	<hr>error<h2>
		Proses  pencatatan buku tamu gagal. silahkan ulangi lagi!
		<br/>
		[<a href="tambah_data.php">Kembali ke form pencatatan buku tamu</a>]
		<?php
	}
}
?>
</body>
</html>