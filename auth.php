<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Jika tidak, redirect ke halaman login
    header("Location: login.php");
    exit();
}
?>
