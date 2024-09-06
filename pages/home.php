<div>
    <h2>Home</h2>

    <!-- menampilkan data halaman dari database -->
    <?php 

    if ($data_halaman->num_rows > 0) {
        while($row = $data_halaman->fetch_assoc()) {
            echo $row['body'];
        }
    }
    
    ?>

</div>