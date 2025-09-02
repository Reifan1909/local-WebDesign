<!DOCTYPE html>
<html>
<head>
	<title>APLIKASI CRUD DATA MAHASISWA</title>
</head>
<body>
	<h1>DATA MAHASISWA WEB DESAIN SI 2</h1>
	<a href="tambah_data.php">TAMBAH DATA MAHASISWA </a><br><br>
	<table border="1" width="100%">
		<tr>
			<th>NO BP</th>
			<th>NAMA</th>
			<th>JENIS KELAMIN</th>
			<th>ALAMAT</th>
			<th>TELP</th>
			<th>AGAMA</th>
			<th>FOTO</th>
			<th colspan="2">AKSI</th>
		</tr>
		<?php
		include "koneksi.php";
		$query = "select * from tb_mahasiswa";
		$sql = mysqli_query($connect, $query);
		while ($data = mysqli_fetch_array($sql)) {
			echo "<tr>";
			echo "<td>".$data['nobp']."</td>";
			echo "<td>".$data['nama']."</td>";
			echo "<td>".$data['jekel']."</td>";
			echo "<td>".$data['alamat']."</td>";
			echo "<td>".$data['telp']."</td>";
			echo "<td>".$data['agama']."</td>";
			echo "<td><img src='images/".$data['foto']."' width='100' height='100'</td>";
			echo "<td><a href='form_ubah.php?nobp=".$data['nobp']."'>EDIT DATA</a></td>";
			echo "<td><a href='hapus_data.php?nobp=".$data['nobp']."'>HAPUS DATA</a></td>";
		}
		?>
	</table>


</body>
</html>