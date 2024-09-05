    <!-- nav start -->
    <nav>
        <div class="container">
            <div class="row">
                <div class="col py-2 bg-light border shadow-md">

                    <a href="?p=home" class="btn <?php if (isset($_GET['p']) && $_GET['p'] == 'home') {
                                                        echo 'btn-primary';
                                                    } else {
                                                        echo 'btn-outline-primary';
                                                    } ?>">Home</a>
                    <a href="?p=profile" class="btn <?php if (isset($_GET['p']) && $_GET['p'] == 'profile') {
                                                        echo 'btn-primary';
                                                    } else {
                                                        echo 'btn-outline-primary';
                                                    } ?>">Profile</a>
                    <a href="?p=visi-misi" class="btn <?php if (isset($_GET['p']) && $_GET['p'] == 'visi-misi') {
                                                            echo 'btn-primary';
                                                        } else {
                                                            echo 'btn-outline-primary';
                                                        } ?>">Visi & Misi</a>
                    <a href="?p=produk-kami" class="btn <?php if (isset($_GET['p']) && $_GET['p'] == 'produk-kami') {
                                                            echo 'btn-primary';
                                                        } else {
                                                            echo 'btn-outline-primary';
                                                        } ?>">Produk Kami</a>
                    <a href="?p=kontak-kami" class="btn <?php if (isset($_GET['p']) && $_GET['p'] == 'kontak-kami') {
                                                            echo 'btn-primary';
                                                        } else {
                                                            echo 'btn-outline-primary';
                                                        } ?>">Kontak Kami</a>
                    <a href="?p=about-us" class="btn <?php if (isset($_GET['p']) && $_GET['p'] == 'about-us') {
                                                            echo 'btn-primary';
                                                        } else {
                                                            echo 'btn-outline-primary';
                                                        } ?>">About Us</a>

                </div>
            </div>
        </div>
    </nav>
    <!-- nav end -->