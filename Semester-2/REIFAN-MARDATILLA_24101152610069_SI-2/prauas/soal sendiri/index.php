<!DOCTYPE html>
<html>
<head>
	<title>APLIKASI CRUD MAHASISWA</title>
</head>
<body>
	<h1>DATA MAHASISWA</h1>
	<a href="tambah_data.php">TAMBAH DATA MAHSISWA</a><br><br>
	<table border="1" width="100%">
		<tr>
			<th>NOBP</th>
			<th>NAMA</th>
			<th>JENIS KELAMIN</th>
			<th>ALAMAT</th>
			<th>FOTO</th>
			<th colspan="2">AKSI</th>
		</tr>
		<?php
		include "koneksi.php";
		$query = "select * from tb_mhs";
		$sql = mysqli_query($connect, $query);
		while ($data = mysqli_fetch_array($sql)) {
			echo "<tr>";
			echo "<td>".$data['nobp']."</td>";
			echo "<td>".$data['nama']."</td>";
			echo "<td>".$data['jenis_kelamin']."</td>";
			echo "<td>".$data['alamat']."</td>";
			echo "<td><img src='images/".$data['foto']."' width='100'</td>";
			echo "<td><a href='form_ubah.php?nobp=".$data['nobp']."'>EDIT DATA</a></td>";
			echo "<td><a href='hapus_data.php?nobp=".$data['nobp']."'>HAPUS DATA</a></td>";
		}
		?>
	</table>


</body>
</html>