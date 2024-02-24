<?php

require 'functions.php';

$buku = query("SELECT * FROM buku");
$penerbit = query("SELECT * FROM penerbit");

if (isset($_POST["cariBuku"])) {
    $buku = cariBuku($_POST["keyword"]);
}

?>


<html>
    <head>
        <title>Halaman Awal</title>
        <link rel="stylesheet" href="style/style.css">

    </head>

    <body>
        <!-- navbar -->
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="admin.php">Admin</a></li>
            <li><a href="pengadaan.php">Pengadaan</a></li>
        </ul> 
        <!-- navbar penutup -->

        <div class="container">

            
            <h2><center>Tabel Buku</center></h2>
            <center><form action="" method="post">
                <input type="text" name="keyword" placeholder="Cari Buku">
                <button type="submit" name="cariBuku">Cari</button>
            </form></center>
            <table border="3" class="center">
                <thead>
                    <tr>
                        <th>ID Buku</th>
                        <th>Kategori</th>
                        <th>Nama Buku</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Penerbit</th>
                        <!-- <th style="text-align: center;">Aksi</th> -->
                    </tr>
                </thead>
                <tbody>
                <?php $i = 0; ?>
                    <?php foreach($buku as $row) : ?>
                    <?php $i++; ?>
                    <tr>
                        <td><?= $row["idBuku"]?></td>
                        <td><?= $row["kategori"]?></td>
                        <td><?= $row["namaBuku"]?></td>
                        <td><?= $row["harga"]?></td>
                        <td><?= $row["stok"]?></td>
                        <td><?= $row["penerbit"]?></td>
                    </tr>
                <?php endforeach; ?>

                </tbody>
                </table>

        </div>

        
        
    </body>
</html>