<?php
include "koneksi.php";
$nobp = $_POST['nobp'];
$nama = $_POST['nama'];
$jekel = $_POST['jekel'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$fotobaru = date('dmYHis').$foto;
$path = "images/".$fotobaru;
if (move_uploaded_file($tmp, $path)){
	$query = "INSERT INTO tb_mahasiswa VALUES('".$nobp."','".$nama."','".$jekel."','".$alamat."','".$telp."','".$agama."','".$fotobaru."')";
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