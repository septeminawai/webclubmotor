<?php 

// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'connections.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conn,"select * from users where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:../admin/index.php?p=dasbor");
}else{
	header("location:../admin/index.php?pesan=gagal");
}
 