<?php
include "koneksi.php";
$id_masakan = $_GET['id_masakan'];
$nama_masakan = $_POST['nama_masakan'];
$jenis_masakan = $_POST['jenis_masakan'];
$komposisi = $_POST['komposisi'];
$harga = $_POST['harga'];
if(isset($_POST['ubah_foto'])){
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];
	$fotobaru = date('dmYHis').$foto;
	$path ="images/".$fotobaru;
	if(move_uploaded_file($tmp, $path)){
		$query ="SELECT * FROM tb_masakan WHERE id_masakan='".$id_masakan."'";
		$sql = mysqli_query($connect, $query);
		$data = mysqli_fetch_array($sql);
		if(is_file("images/".$data['foto']))
			unlink("images/".$data['foto']);
		$query = "UPDATE tb_masakan SET nama_masakan='".$nama_masakan."', jenis_masakan='".$jenis_masakan."',harga='".$harga."',komposisi='".$komposisi."',foto='".$fotobaru."' WHERE id_masakan='".$id_masakan."'";
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
	$query = "UPDATE tb_masakan SET nama_masakan='".$nama_masakan."', jenis_masakan='".$jenis_masakan."',harga='".$harga."',komposisi='".$komposisi."' WHERE id_masakan='".$id_masakan."'";
	$sql = mysqli_query($connect, $query);
	if($sql){
		header("location: index.php");
	}else{
		echo "Maaf, terjadi kesalahan saat mencoba untuk mencoba data ke database.";
		echo "<br><a href='form_ubah.php'>Kembali Ke Form </a>";
	}
}