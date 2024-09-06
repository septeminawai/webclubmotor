<?php include('configs/connections.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>


    <!-- include bagian header -->
    <?php require_once('partials/header.php'); ?>

    <!-- include bagian nav -->
    <?php require_once('partials/nav.php'); ?>

    <!-- main start -->
    <main>
        <div class="container">
            <div class="row my-4">
                <div class="col-lg-3 py-2 bg-light border shadow-md">
                    <!-- include bagian sidebar -->
                    <?php require_once('partials/sidebar.php'); ?>
                </div>
                <div class="col-lg-9 py-2 bg-light border shadow-md">
                    <?php
                    // periksa jika parameter p/page digunakan
                    // dan periksa jika p/page = home
                    // maka tampilkkan file 'pages/home.php'
                    if (isset($_GET['p']) && $_GET['p'] == 'home') {
                        require_once('pages/home.php');
                    }
                    ?>

                    <?php
                    // periksa jika parameter p/page digunakan
                    // dan periksa jika p/page = profile
                    // maka tampilkkan file 'pages/profile.php'
                    if (isset($_GET['p']) && $_GET['p'] == 'profile') {
                        require_once('pages/profile.php');
                    }
                    ?>

                    <?php
                    // periksa jika parameter p/page digunakan
                    // dan periksa jika p/page = visi-misi
                    // maka tampilkkan file 'pages/visi-misi.php'
                    if (isset($_GET['p']) && $_GET['p'] == 'visi-misi') {
                        require_once('pages/visi-misi.php');
                    }
                    ?>

                    <?php
                    // periksa jika parameter p/page digunakan
                    // dan periksa jika p/page = produk-kami
                    // maka tampilkkan file 'pages/produk-kami.php'
                    if (isset($_GET['p']) && $_GET['p'] == 'produk-kami') {
                        require_once('pages/produk-kami.php');
                    }
                    ?>

                    <?php
                    // periksa jika parameter p/page digunakan
                    // dan periksa jika p/page = kontak-kami
                    // maka tampilkkan file 'pages/kontak-kami.php'
                    if (isset($_GET['p']) && $_GET['p'] == 'kontak-kami') {
                        require_once('pages/kontak-kami.php');
                    }
                    ?>

                    <?php
                    // periksa jika parameter p/page digunakan
                    // dan periksa jika p/page = about-us
                    // maka tampilkkan file 'pages/about-us.php'
                    if (isset($_GET['p']) && $_GET['p'] == 'about-us') {
                        require_once('pages/about-us.php');
                    }
                    ?>

                    <!-- LOGIN -->

                    <?php
                    // periksa jika parameter p/page digunakan
                    // dan periksa jika p/page = signin
                    // maka tampilkkan file 'pages/signin.php'
                    if (isset($_GET['p']) && $_GET['p'] == 'signin') {
                        require_once('pages/admin/signin.php');
                    }
                    ?>

                    <?php
                    // periksa jika parameter p/page digunakan
                    // dan periksa jika p/page = signup
                    // maka tampilkkan file 'pages/signup.php'
                    if (isset($_GET['p']) && $_GET['p'] == 'signup') {
                        require_once('pages/admin/signup.php');
                    }
                    ?>

                    <!-- SIDEBAR -->

                    <?php
                    // periksa jika parameter p/page digunakan
                    // dan periksa jika p/page = artikel
                    // maka tampilkkan file 'pages/artikel.php'
                    if (isset($_GET['p']) && $_GET['p'] == 'artikel') {
                        require_once('pages/artikel.php');
                    }
                    ?>

                    <?php
                    // periksa jika parameter p/page digunakan
                    // dan periksa jika p/page = event
                    // maka tampilkkan file 'pages/event.php'
                    if (isset($_GET['p']) && $_GET['p'] == 'event') {
                        require_once('pages/event.php');
                    }
                    ?>

                    <?php
                    // periksa jika parameter p/page digunakan
                    // dan periksa jika p/page = galeri
                    // maka tampilkkan file 'pages/galeri.php'
                    if (isset($_GET['p']) && $_GET['p'] == 'galeri') {
                        require_once('pages/galeri.php');
                    }
                    ?>

                    <?php
                    // periksa jika parameter p/page digunakan
                    // dan periksa jika p/page = klien
                    // maka tampilkkan file 'pages/klien.php'
                    if (isset($_GET['p']) && $_GET['p'] == 'klien') {
                        require_once('pages/klien.php');
                    }
                    ?>

                </div>
            </div>
        </div>
    </main>
    <!-- main end -->



    <!-- include bagian footer -->
    <?php require_once('partials/footer.php'); ?>

    <!-- Bootstrap JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>