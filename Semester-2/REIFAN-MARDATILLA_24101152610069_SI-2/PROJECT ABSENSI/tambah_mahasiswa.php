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
    $nama = htmlspecialchars($_POST['nama']);
    $nim = htmlspecialchars($_POST['nim']);
    $jurusan = htmlspecialchars($_POST['jurusan']);

    if ($nama && $nim && $jurusan) {
        $insert = mysqli_query($conn, "INSERT INTO mahasiswa (nama, nim, jurusan) VALUES ('$nama', '$nim', '$jurusan')");
        if ($insert) {
            echo "<script>alert('Data berhasil ditambahkan'); window.location='mahasiswa.php';</script>";
        } else {
            echo "<p style='color:red;'>Gagal menyimpan data.</p>";
        }
    } else {
        echo "<p style='color:red;'>Semua kolom wajib diisi!</p>";
    }
}
?>

<h2>Tambah Mahasiswa</h2>
<form method="POST" action="">
    <div class="form-group">
        <label>Nama:</label>
        <input type="text" name="nama" required>
    </div>

    <div class="form-group">
        <label>NIM:</label>
        <input type="text" name="nim" required>
    </div>

    <div class="form-group">
        <label>Jurusan:</label>
        <input type="text" name="jurusan" required>
    </div>

    <div class="form-buttons">
        <input type="submit" value="Simpan" class="btn">
        <a href="mahasiswa.php" class="btn" style="background-color:#6c757d;">Batal</a>
    </div>
</form>


<?php include 'template/footer.php'; ?>

