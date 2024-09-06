<?php
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "jwd";

// Create connection (Membuat koneksi)
$connect = mysqli_connect("localhost", "root", "", "jwd");

// Check connection
echo "Berhasil Koneksi ke Database";

if (!$connect) {
    die("Gagal Terhubung ke Database" . mysqli_connect_error());
}
