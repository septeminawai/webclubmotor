<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "webclubmotor"; //buat database di PHPMyAdmin dengan name "webclubmotor"

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // echo "Connected successfully";

    // mengambil ambil data halaman dari database  
    if(isset($_GET['p']) && $_GET['p'] == 'home') {
        $sql = "SELECT * FROM halaman WHERE id=1"; // jika parameter = home maka pasangkan dengan id=1
        $data_halaman = $conn->query($sql);
    }      


?>