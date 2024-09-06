                    <ul class="list-group">
                        <li class="list-group-item <?php if (isset($_GET['p']) && $_GET['p'] == 'dasbor') { echo 'active'; }?>">
                            <a href="?p=dasbor" class="text-decoration-none <?php if (isset($_GET['p']) && $_GET['p'] == 'dasbor') { echo 'text-white'; }?>">Dasbor</a>
                        </li>
                        <li class="list-group-item <?php if (isset($_GET['p']) && $_GET['p'] == 'artikel') { echo 'active'; }?>">
                            <a href="?p=artikel" class="text-decoration-none <?php if (isset($_GET['p']) && $_GET['p'] == 'artikel') { echo 'text-white'; }?>">Artikel</a>
                        </li>
                        <li class="list-group-item <?php if (isset($_GET['p']) && $_GET['p'] == 'event') { echo 'active'; }?>">
                            <a href="?p=event" class="text-decoration-none <?php if (isset($_GET['p']) && $_GET['p'] == 'event') { echo 'text-white'; }?>">Event</a>
                        </li>
                        <li class="list-group-item <?php if (isset($_GET['p']) && $_GET['p'] == 'galeri') { echo 'active'; }?>">
                            <a href="?p=galeri" class="text-decoration-none <?php if (isset($_GET['p']) && $_GET['p'] == 'galeri') { echo 'text-white'; }?>">Galeri Foto</a>
                        </li>
                        <li class="list-group-item <?php if (isset($_GET['p']) && $_GET['p'] == 'klien') { echo 'active'; }?>">
                            <a href="?p=klien" class="text-decoration-none <?php if (isset($_GET['p']) && $_GET['p'] == 'klien') { echo 'text-white'; }?>">Klien Kami</a>
                        </li>
                        <li class="list-group-item <?php if (isset($_GET['p']) && $_GET['p'] == 'logout') { echo 'active'; }?>">
                            <a href="../configs/logout.php" class="text-decoration-none <?php if (isset($_GET['p']) && $_GET['p'] == 'logout') { echo 'text-white'; }?>">Logout</a>
                        </li>
                    </ul>