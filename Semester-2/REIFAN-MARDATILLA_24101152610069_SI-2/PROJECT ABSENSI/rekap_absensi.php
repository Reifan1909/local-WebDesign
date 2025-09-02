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
?>

<h2>Rekap Absensi Mahasiswa</h2>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Hadir</th>
        <th>Izin</th>
        <th>Sakit</th>
        <th>Alpha</th>
        <th>Total</th>
    </tr>
    <?php
    $no = 1;
    $q_mhs = mysqli_query($conn, "SELECT * FROM mahasiswa ORDER BY nama ASC");
    while ($mhs = mysqli_fetch_assoc($q_mhs)) {
        $id = $mhs['id'];

        $hadir  = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM absensi WHERE id_mahasiswa = $id AND status = 'Hadir'"));
        $izin   = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM absensi WHERE id_mahasiswa = $id AND status = 'Izin'"));
        $sakit  = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM absensi WHERE id_mahasiswa = $id AND status = 'Sakit'"));
        $alpha  = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM absensi WHERE id_mahasiswa = $id AND status = 'Alpha'"));
        $total  = $hadir + $izin + $sakit + $alpha;

        echo "<tr>
                <td>$no</td>
                <td>{$mhs['nama']}</td>
                <td>{$mhs['nim']}</td>
                <td>$hadir</td>
                <td>$izin</td>
                <td>$sakit</td>
                <td>$alpha</td>
                <td>$total</td>
              </tr>";
        $no++;
    }
    ?>
</table>

<?php include 'template/footer.php'; ?>
