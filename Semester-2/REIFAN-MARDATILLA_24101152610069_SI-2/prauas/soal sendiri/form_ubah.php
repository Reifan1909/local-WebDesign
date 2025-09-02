<!DOCTYPE html>
<html>
<head>
	<title>APLIKASI CRUD MAHASISWA</title>
</head>
<body>
	<h1>Ubah Data Mahasiswa</h1>

	<?php
	include "koneksi.php";
	$nobp = $_GET['nobp'];
	$query = "SELECT * FROM tb_mhs WHERE nobp='".$nobp."'";
	$sql = mysqli_query($connect, $query);
	$data = mysqli_fetch_array($sql);
	?>
	<form method="post" action="proses_ubah.php?nobp=<?php echo $nobp; ?>" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>
		<?php
		if ($data['jenis_kelamin'] == "Pria") {
			echo "<input type='radio' name='jenis_kelamin' value='Pria' checked='checked'>Pria";
			echo "<input type='radio' name='jenis_kelamin' value='Wanita'>Wanita";
			echo "<input type='radio' name='jenis_kelamin' value='LGBT'>LGBT";
		} else if ($data['jenis_kelamin'] == "Wanita") {
			echo "<input type='radio' name='jenis_kelamin' value='Pria'>Pria";
			echo "<input type='radio' name='jenis_kelamin' value='Wanita' checked='checked'>Wanita";
			echo "<input type='radio' name='jenis_kelamin' value='LGBT'>Tradisional";
		} else {
			echo "<input type='radio' name='jenis_kelamin' value='Pria'>Pria";
			echo "<input type='radio' name='jenis_kelamin' value='Wanita'>Wanita";
			echo "<input type='radio' name='jenis_kelamin' value='LGBT' checked='checked'>LGBT";
		}

		?>
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><textarea name="alamat"><?php echo $data['alamat']; ?></textarea></td>
	</tr>
	
	<tr>
		<td>Foto</td>
		<td>
			<input type="checkbox" name="ubah_foto" value="true">Ceklis Jika Ingin Mengubah Foto<br>
			<input type="file" name="foto">

		</td>
	</tr>
		
	</table>

	<hr>
	<input type="submit" value="Ubah">
	<a href="index.php"><input type="button" value="Batal"></a>
	</form>


</body>
</html>