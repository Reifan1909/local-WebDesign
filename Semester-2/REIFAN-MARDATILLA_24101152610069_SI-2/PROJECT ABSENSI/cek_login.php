<?php
session_start();

$users = [
    'dosen1' => '12345',
    'dosen2' => 'admin',
];

$username = $_POST['username'];
$password = $_POST['password'];

if (isset($users[$username]) && $users[$username] === $password) {
    $_SESSION['user'] = $username;
    header("Location: index.php");
} else {
    echo "<script>alert('Login gagal!'); window.location='login.php';</script>";
}
