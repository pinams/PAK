<?php
session_start(); // Mulai session

include 'db_connect.php'; // Koneksi ke database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query untuk mengambil data pengguna berdasarkan email
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verifikasi password
        if (password_verify($password, $user['password'])) {
            $_SESSION['loggedin'] = true; // Set session jika login berhasil
            $_SESSION['user_id'] = $user['id'];
            header("Location: index.php"); // Redirect ke index.php
            exit();
        } else {
            echo "Password salah.";
        }
    } else {
        // Email tidak ditemukan, arahkan ke halaman pendaftaran
        header("Location: register.php?message=Email belum terdaftar. Daftar terlebih dahulu.");
        exit();
    }

    $conn->close();
}
?>
