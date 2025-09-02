<!DOCTYPE html>
<html>
<head>
	<title>APLIKASI CRUD MASAKAN</title>
</head>
<body>
	<h1>Ubah Data Masakan</h1>

	<?php
	include "koneksi.php";
	$id_masakan = $_GET['id_masakan'];
	$query = "SELECT * FROM tb_masakan WHERE id_masakan='".$id_masakan."'";
	$sql = mysqli_query($connect, $query);
	$data = mysqli_fetch_array($sql);
	?>
	<form method="post" action="proses_ubah.php?id_masakan=<?php echo $id_masakan; ?>" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td>Nama Masakan</td>
		<td><input type="text" name="nama_masakan" value="<?php echo $data['nama_masakan']; ?>"></td>
	</tr>
	<tr>
		<td>Jenis Masakan</td>
		<td>
		<?php
		if ($data['jenis_masakan'] == "Kering") {
			echo "<input type='radio' name='jenis_masakan' value='Kering' checked='checked'>Kering";
			echo "<input type='radio' name='jenis_masakan' value='Basah'>Basah";
			echo "<input type='radio' name='jenis_masakan' value='Tradisional'>Tradisional";
			echo "<input type='radio' name='jenis_masakan' value='Modern'> Modern";
		} else if ($data['jenis_masakan'] == "Basah") {
			echo "<input type='radio' name='jenis_masakan' value='Kering'>Kering";
			echo "<input type='radio' name='jenis_masakan' value='Basah' checked='checked'>Basah";
			echo "<input type='radio' name='jenis_masakan' value='Tradisional'>Tradisional";
			echo "<input type='radio' name='jenis_masakan' value='Modern'> Modern";
		} else if ($data['jenis_masakan'] == "Tradisional") {
			echo "<input type='radio' name='jenis_masakan' value='Kering'>Kering";
			echo "<input type='radio' name='jenis_masakan' value='Basah'>Basah";
			echo "<input type='radio' name='jenis_masakan' value='Tradisional' checked='checked'>Tradisional";
			echo "<input type='radio' name='jenis_masakan' value='Modern'>Modern";
		} else {
			echo "<input type='radio' name='jenis_masakan' value='Kering'>Kering";
			echo "<input type='radio' name='jenis_masakan' value='Basah'>Basah";
			echo "<input type='radio' name='jenis_masakan' value='Tradisional'>Tradisional";
			echo "<input type='radio' name='jenis_masakan' value='Modern' checked='checked'>Modern";
		}

		?>
		</td>
	</tr>
	<tr>
		<td>Komposisi</td>
		<td><textarea name="komposisi"><?php echo $data['komposisi']; ?></textarea></td>
	</tr>
	<tr>
		<td>Harga</td>
		<td><input type="text" name="harga" value="<?php echo $data ['harga'];?>"></td>
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