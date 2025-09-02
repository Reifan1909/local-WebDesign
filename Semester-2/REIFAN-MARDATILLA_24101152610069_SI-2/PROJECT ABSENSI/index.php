<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
?>

<?php
include 'koneksi.php';
include 'template/header.php';

$jumlah_mahasiswa = mysqli_num_rows(mysqli_query($conn, "SELECT id FROM mahasiswa"));

$tanggal_hari_ini = date("Y-m-d");
$jumlah_absensi_hari_ini = mysqli_num_rows(mysqli_query($conn, "SELECT id FROM absensi WHERE tanggal = '$tanggal_hari_ini'"));
?>

<h2>Dashboard Absensi</h2>
<div class="dashboard">
    <div class="card">
        <h3>Total Mahasiswa</h3>
        <p><?= $jumlah_mahasiswa; ?> orang</p>
    </div>
    <div class="card">
        <h3>Absensi Hari Ini (<?= $tanggal_hari_ini; ?>)</h3>
        <p><?= $jumlah_absensi_hari_ini; ?> data</p>
    </div>
</div>

<h3 style="margin-top:40px;">Absensi Terbaru</h3>
<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>Nama</th>
        <th>Tanggal</th>
        <th>Status</th>
    </tr>
    <?php
    $q = mysqli_query($conn, "SELECT m.nama, a.tanggal, a.status FROM absensi a JOIN mahasiswa m ON a.id_mahasiswa = m.id ORDER BY a.tanggal DESC LIMIT 5");
    while ($data = mysqli_fetch_assoc($q)) {
        echo "<tr>
                <td>{$data['nama']}</td>
                <td>{$data['tanggal']}</td>
                <td>{$data['status']}</td>
              </tr>";
    }
    ?>
</table>

<div class="info">
    <h3>Info Sistem</h3>
    <p>Silakan gunakan menu navigasi di atas untuk menambahkan data mahasiswa, mengisi absensi harian, atau melihat rekap absensi. Pastikan data mahasiswa lengkap sebelum melakukan absensi.</p>
</div>

<?php include 'template/footer.php'; ?>
