<?php

require 'functions.php';

$buku = query("SELECT * FROM buku ORDER BY stok ASC");

?>


<html>
    <head>
        <title>Penggadaan</title>
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
            <h2><center>Tabel Penggadaan</center></h2>
            <table border="3" class="center">
                <thead>
                    <tr>
                        <th>Nama Buku</th>
                        <th>Penerbit</th>
                        <th>Stok</th>
                        <!-- <th style="text-align: center;">Aksi</th> -->
                    </tr>
                </thead>
                <tbody>
                <?php $i = 0; ?>
                    <?php foreach($buku as $row) : ?>
                    <?php $i++; ?>
                    <tr>
                        <td><?= $row["namaBuku"]?></td>
                        <td><?= $row["penerbit"]?></td>
                        <td><?= $row["stok"]?></td>
                    </tr>
                <?php endforeach; ?>

                </tbody>
                </table>

        </div>

        
        
    </body>
</html>