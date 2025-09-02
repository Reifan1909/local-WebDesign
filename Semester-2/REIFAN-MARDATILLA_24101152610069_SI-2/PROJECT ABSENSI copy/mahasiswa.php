<?php
include 'koneksi.php';
include 'template/header.php';
?>

<h2>Data Mahasiswa</h2>
<a href="tambah_mahasiswa.php" class="btn">+ Tambah Mahasiswa</a>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Jurusan</th>
        <th>Aksi</th>
    </tr>
    <?php
    $no = 1;
    $query = mysqli_query($conn, "SELECT * FROM mahasiswa ORDER BY id DESC");
    while ($data = mysqli_fetch_assoc($query)) {
        echo "<tr>
                <td>{$no}</td>
                <td>{$data['nama']}</td>
                <td>{$data['nim']}</td>
                <td>{$data['jurusan']}</td>
                <td>
                    <a href='edit_mahasiswa.php?id={$data['id']}'>Edit</a> | 
                    <a href='hapus_mahasiswa.php?id={$data['id']}' onclick=\"return confirm('Yakin hapus?');\">Hapus</a>
                </td>
              </tr>";
        $no++;
    }
    ?>
</table>

<?php include 'template/footer.php'; ?>
