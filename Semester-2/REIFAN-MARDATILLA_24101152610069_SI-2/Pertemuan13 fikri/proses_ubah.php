<?php
include "koneksi.php";
$nobp = $_GET['nobp'];
$nama = $_POST['nama'];
$jekel = $_POST['jekel'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];
if(isset($_POST['ubah_foto'])){
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];
	$fotobaru = date('dmYHis').$foto;
	$path ="images/".$fotobaru;
	if(move_uploaded_file($tmp, $path)){
		$query ="SELECT * FROM tb_mahasiswa WHERE nobp='".$nobp."'";
		$sql = mysqli_query($connect, $query);
		$data = mysqli_fetch_array($sql);
		if(is_file("images/".$data['foto']))
			unlink("images/".$data['foto']);
		$query = "UPDATE tb_mahasiswa SET nama='".$nama."', jekel='".$jekel."',alamat='".$alamat."',telp='".$telp."',agama='".$agama."',foto='".$fotobaru."' WHERE nobp='".$nobp."'";
		$sql = mysqli_query($connect, $query);
		if($sql){
			header("location: index.php");

		}else{
			echo "Maaf, terjadi kesalahan saat mencoba untuk mencoba data ke database.";
			echo "<br><a href='form_ubah.php'>Kembali Ke Form </a>";
		}
	}else{
		echo "Maaf, gambar gagal untuk diupload.";
		echo "<br><a href='form_ubah.php'>Kembali Ke Form </a>";
	}
}else {
	$query = "UPDATE tb_mahasiswa SET nama='".$nama."', jekel='".$jekel."',alamat='".$alamat."',telp='".$telp."',agama='".$agama."', WHERE nobp='".$nobp."'";
	$sql = mysqli_query($connect, $query);
	if($sql){
		header("location: index.php");
	}else{
		echo "Maaf, terjadi kesalahan saat mencoba untuk mencoba data ke database.";
		echo "<br><a href='form_ubah.php'>Kembali Ke Form </a>";
	}
}