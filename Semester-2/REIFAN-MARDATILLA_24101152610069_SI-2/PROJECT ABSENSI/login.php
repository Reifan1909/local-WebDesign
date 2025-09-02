<?php
session_start();
if (isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}
?>

<?php
include 'koneksi.php';
include 'template/header.php';
?>

<main class="login-page">
    <div class="login-box">
        <h2>Login Dosen</h2>
        <form action="cek_login.php" method="POST">
            <div class="form-group">
                <label for="username">Nama Dosen</label>
                <input type="text" id="username" name="username" placeholder="Masukkan username" required>
            </div>

            <div class="form-group">
                <label for="password">Kata Sandi</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password" required>
            </div>

            <div class="form-buttons">
                <input type="submit" value="Login" class="btn">
            </div>
        </form>
    </div>
</main>

