<?php
session_start(); // Memulai sesi

// Konfigurasi database
$servername = 'localhost';
$database = 'webclubmotor';
$username = 'root'; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari formulir
$username = $_POST['username'];
$password = $_POST['password'];

// Menghindari SQL Injection dengan prepared statements
$stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Pengguna ditemukan
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        // Kata sandi cocok
        $_SESSION['user_id'] = $user['id'];
        header("Location: welcome.php"); // Redirect ke halaman selamat datang
        exit();
    } else {
        echo "Nama pengguna atau kata sandi salah.";
    }
} else {
    echo "Nama pengguna atau kata sandi salah.";
}

$stmt->close();
$conn->close();
