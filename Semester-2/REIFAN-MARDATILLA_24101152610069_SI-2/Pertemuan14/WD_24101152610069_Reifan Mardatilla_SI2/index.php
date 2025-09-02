<!DOCTYPE html>
<html>
<head>
	<title>APLIKASI CRUD MASAKAN</title>
</head>
<body>
	<h1>DATA MAHASISWA MASAKAN</h1>
	<a href="tambah_data.php">TAMBAH DATA MASAKAN</a><br><br>
	<table border="1" width="100%">
		<tr>
			<th>ID MASAKAN</th>
			<th>NAMA MASAKAN</th>
			<th>JENIS MASAKAN</th>
			<th>KOMPOSISI</th>
			<th>HARGA</th>
			<th>FOTO</th>
			<th colspan="2">AKSI</th>
		</tr>
		<?php
		include "koneksi.php";
		$query = "select * from tb_masakan";
		$sql = mysqli_query($connect, $query);
		while ($data = mysqli_fetch_array($sql)) {
			echo "<tr>";
			echo "<td>".$data['id_masakan']."</td>";
			echo "<td>".$data['nama_masakan']."</td>";
			echo "<td>".$data['jenis_masakan']."</td>";
			echo "<td>".$data['komposisi']."</td>";
			echo "<td>".$data['harga']."</td>";
			echo "<td><img src='images/".$data['foto']."' width='100' height='100'</td>";
			echo "<td><a href='form_ubah.php?id_masakan=".$data['id_masakan']."'>EDIT DATA</a></td>";
			echo "<td><a href='hapus_data.php?id_masakan=".$data['id_masakan']."'>HAPUS DATA</a></td>";
		}
		?>
	</table>


</body>
</html>