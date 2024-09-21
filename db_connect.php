<?php
$servername = "localhost";
$username = "root";  // default MySQL user
$password = "";      // default password kosong
$dbname = "testing";  // nama database yang kamu buat

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
// echo "Koneksi berhasil!";
?>
