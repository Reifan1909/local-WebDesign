<?php
include 'koneksi.php';
include 'template/header.php';
?>

<h2>Data Absensi</h2>
<a href="isi_absen.php" class="btn">+ Isi Absensi</a>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Jurusan</th>
        <th>Tanggal</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
    <?php
    $no = 1;
    $query = mysqli_query($conn, "
        SELECT a.id, m.nama, m.nim, m.jurusan, a.tanggal, a.status
        FROM absensi a
        JOIN mahasiswa m ON a.id_mahasiswa = m.id
        ORDER BY a.tanggal DESC, a.id DESC
    ");

    while ($data = mysqli_fetch_assoc($query)) {
        echo "<tr>
                <td>$no</td>
                <td>{$data['nama']}</td>
                <td>{$data['nim']}</td>
                <td>{$data['jurusan']}</td>
                <td>{$data['tanggal']}</td>
                <td>{$data['status']}</td>
                <td>
                    <a href='hapus_absen.php?id={$data['id']}' onclick=\"return confirm('Yakin hapus absensi ini?');\">Hapus</a>
                </td>
              </tr>";
        $no++;
    }
    ?>
</table>

<?php include 'template/footer.php'; ?>
