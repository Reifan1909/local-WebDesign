<?php
session_start();
if (isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Absensi</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <h1>Sistem Absensi Mahasiswa</h1>
    <nav>
        <div class="hamburger" onclick="toggleMenu()"><span>☰</span></div>
        <ul id="nav-links">
            <li><a href="index.php">Beranda</a></li>
            <li><a href="mahasiswa.php">Mahasiswa</a></li>
            <li><a href="absensi.php">Absensi</a></li>
            <li><a href="tambah_mahasiswa.php">Tambah Mahasiswa</a></li>
            <li><a href="isi_absen.php">Isi Absensi</a></li>
            <li><a href="rekap_absensi.php">Rekap</a></li>
            <?php if (isset($_SESSION['user'])): ?>
                <li><a href="logout.php">Logout (<?= $_SESSION['user'] ?>)</a></li>
            <?php else: ?>
                <li><a href="login.php">Login</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>
<main>
