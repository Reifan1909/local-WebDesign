<?php
include "koneksi.php";
$nobp = $_GET['nobp'];
$query = "SELECT * FROM tb_mahasiswa WHERE nobp='".$nobp."'";
$sql = mysqli_query($connect, $query);
$data = mysqli_fetch_array($sql);
if(is_file("images/".$data['foto']))
	unlink("images/".$data['foto']);
$query2 = "DELETE FROM tb_mahasiswa WHERE nobp='".$nobp."'";
$sql2 = mysqli_query($connect, $query2);
if($sql2){
	header("location: index.php");
} else{
	echo "Data Gagal dihapus. <a href='index.php'>Kembali</a>";
}
?>