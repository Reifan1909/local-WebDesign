<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
?>

<?php
include 'koneksi.php';

// Pastikan ada ID yang dikirim
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Hapus data dari database
    $hapus = mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    if ($hapus) {
        echo "<script>alert('Data berhasil dihapus'); window.location='mahasiswa.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data'); window.location='mahasiswa.php';</script>";
    }
} else {
    // Jika tidak ada ID, langsung redirect
    header('Location: mahasiswa.php');
}
?>
