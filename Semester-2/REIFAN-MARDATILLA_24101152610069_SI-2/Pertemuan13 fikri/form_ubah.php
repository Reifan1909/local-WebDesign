<!DOCTYPE html>
<html>
<head>
	<title>APLIKASI CRUD dengan PHP</title>
</head>
<body>
	<h1>Ubah Data Mahasiswa</h1>

	<?php
	include "koneksi.php";
	$nobp = $_GET['nobp'];
	$query = "SELECT * FROM tb_mahasiswa WHERE nobp='".$nobp."'";
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
		if($data['jekel'] == "Laki-laki"){
			echo "<input type='radio' name='jekel' value='Laki-laki' checked='checked'> Laki-laki";
			echo "<input type='radio' name='jekel' value='Perempuan'> Perempuan";
		} else{
			echo "<input type='radio' name='jekel' value='Laki-laki' > Laki-laki";
			echo "<input type='radio' name='jekel' value='Perempuan'  checked='checked'> Perempuan";
		}
		?>
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><textarea name="alamat"><?php echo $data['alamat']; ?></textarea></td>
	</tr>
	<tr>
		<td>Telp</td>
		<td><input type="text" name="telp" value="<?php echo $data ['telp'];?>"></td>
	</tr>
	<tr>
		<td> Agama <select name="agama" value="<?php echo $data['agama']; ?>"> 
			<option value="Islam"> Islam 
			<option value="Kristen"> Kristen 
			<option value="Budha"> Budha 
			</select>
		</td>
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