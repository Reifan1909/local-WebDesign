<?php
include "koneksi.php";
$nobp = $_GET['nobp'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
if(isset($_POST['ubah_foto'])){
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];
	$fotobaru = date('dmYHis').$foto;
	$path ="images/".$fotobaru;
	if(move_uploaded_file($tmp, $path)){
		$query ="SELECT * FROM tb_mhs WHERE nobp='".$nobp."'";
		$sql = mysqli_query($connect, $query);
		$data = mysqli_fetch_array($sql);
		if(is_file("images/".$data['foto']))
			unlink("images/".$data['foto']);
		$query = "UPDATE tb_mhs SET nama='".$nama."', jenis_kelamin='".$jenis_kelamin."',alamat='".$alamat."',foto='".$fotobaru."' WHERE nobp='".$nobp."'";
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
	$query = "UPDATE tb_mhs SET nama='".$nama."', jenis_kelamin='".$jenis_kelamin."',alamat='".$alamat."' WHERE nobp='".$nobp."'";
	$sql = mysqli_query($connect, $query);
	if($sql){
		header("location: index.php");
	}else{
		echo "Maaf, terjadi kesalahan saat mencoba untuk mencoba data ke database.";
		echo "<br><a href='form_ubah.php'>Kembali Ke Form </a>";
	}
}