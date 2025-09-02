<?php
include "koneksi.php";
$id_masakan = $_GET['id_masakan'];
$query = "SELECT * FROM tb_masakan WHERE id_masakan='".$id_masakan."'";
$sql = mysqli_query($connect, $query);
$data = mysqli_fetch_array($sql);
if(is_file("images/".$data['foto']))
	unlink("images/".$data['foto']);
$query2 = "DELETE FROM tb_masakan WHERE id_masakan='".$id_masakan."'";
$sql2 = mysqli_query($connect, $query2);
if($sql2){
	header("location: index.php");
} else{
	echo "Data Gagal dihapus. <a href='index.php'>Kembali</a>";
}
?>