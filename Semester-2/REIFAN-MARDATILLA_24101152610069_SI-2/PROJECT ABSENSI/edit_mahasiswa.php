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

$id = isset($_GET['id']) ? $_GET['id'] : 0;

$q = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id = $id");
$data = mysqli_fetch_assoc($q);

if (!$data) {
    echo "<p>Data tidak ditemukan.</p>";
    include 'template/footer.php';
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama    = htmlspecialchars($_POST['nama']);
    $nim     = htmlspecialchars($_POST['nim']);
    $jurusan = htmlspecialchars($_POST['jurusan']);

    if ($nama && $nim && $jurusan) {
        $update = mysqli_query($conn, "UPDATE mahasiswa SET 
            nama = '$nama', 
            nim = '$nim', 
            jurusan = '$jurusan' 
            WHERE id = $id
        ");
        if ($update) {
            echo "<script>alert('Data berhasil diubah'); window.location='mahasiswa.php';</script>";
        } else {
            echo "<p style='color:red;'>Gagal mengupdate data.</p>";
        }
    } else {
        echo "<p style='color:red;'>Semua kolom wajib diisi!</p>";
    }
}
?>

<h2>Edit Mahasiswa</h2>

<form method="POST" action="">
    <div class="form-group">
        <label>Nama:</label>
        <input type="text" name="nama" value="<?= $data['nama']; ?>" required>
    </div>

    <div class="form-group">
        <label>NIM:</label>
        <input type="text" name="nim" value="<?= $data['nim']; ?>" required>
    </div>

    <div class="form-group">
        <label>Jurusan:</label>
        <input type="text" name="jurusan" value="<?= $data['jurusan']; ?>" required>
    </div>

    <div class="form-buttons">
        <input type="submit" name="simpan" value="Update" class="btn">
        <a href="mahasiswa.php" class="btn" style="background-color:#6c757d;">Batal</a>
    </div>
</form>

<?php include 'template/footer.php'; ?>
