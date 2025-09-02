<?php
include "koneksi.php";
$id_masakan = $_POST['id_masakan'];
$nama_masakan = $_POST['nama_masakan'];
$jenis_makanan = $_POST['jenis_makanan'];
$komposisi = $_POST['komposisi'];
$harga = $_POST['harga'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$fotobaru = date('dmYHis').$foto;
$path = "images/".$fotobaru;
if (move_uploaded_file($tmp, $path)){
	$query = "INSERT INTO tb_masakan VALUES('".$id_masakan."','".$nama_masakan."','".$jenis_makanan."','".$komposisi."','".$harga."','".$fotobaru."')";
	$sql = mysqli_query($connect, $query);
	if($sql){
		header("location: index.php");
	}else{
		echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='tambah_data.php'>Kembali Ke Form</a>";

	}

}else{
	echo "Maaf, gambar gagal untuk diupload.";
	echo "<br><a href='tambah_data.php'>Kembali Ke Form</a>";

}	
?>