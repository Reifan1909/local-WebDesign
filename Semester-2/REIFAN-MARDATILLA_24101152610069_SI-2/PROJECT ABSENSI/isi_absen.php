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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_mahasiswa = $_POST['id_mahasiswa'];
    $tanggal      = $_POST['tanggal'];
    $status       = $_POST['status'];

    if ($id_mahasiswa && $tanggal && $status) {
        $simpan = mysqli_query($conn, "INSERT INTO absensi (id_mahasiswa, tanggal, status) VALUES ('$id_mahasiswa', '$tanggal', '$status')");

        if ($simpan) {
            echo "<script>alert('Absensi berhasil dicatat'); window.location='absensi.php';</script>";
        } else {
            echo "<p style='color:red;'>Gagal mencatat absensi.</p>";
        }
    } else {
        echo "<p style='color:red;'>Semua kolom wajib diisi.</p>";
    }
}
?>

<h2>Isi Absensi</h2>
<form method="POST" action="">
    <div class="form-group">
        <label>Mahasiswa:</label>
        <select name="id_mahasiswa" required>
            <option value="">-- Pilih Mahasiswa --</option>
            <?php
            $q = mysqli_query($conn, "SELECT * FROM mahasiswa ORDER BY nama ASC");
            while ($mhs = mysqli_fetch_assoc($q)) {
                echo "<option value='{$mhs['id']}'>{$mhs['nama']} - {$mhs['nim']}</option>";
            }
            ?>
        </select>
    </div>

    <div class="form-group">
        <label>Tanggal:</label>
        <input type="date" name="tanggal" value="<?= date('Y-m-d'); ?>" required>
    </div>

    <div class="form-group">
        <label>Status:</label>
        <select name="status" required>
            <option value="">-- Pilih Status --</option>
            <option value="Hadir">Hadir</option>
            <option value="Izin">Izin</option>
            <option value="Sakit">Sakit</option>
            <option value="Alpha">Alpha</option>
        </select>
    </div>

    <div class="form-buttons">
        <input type="submit" value="Simpan" class="btn">
        <a href="absensi.php" class="btn" style="background-color:#6c757d;">Batal</a>
    </div>
</form>


<?php include 'template/footer.php'; ?>
