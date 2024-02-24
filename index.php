<?php

require 'functions.php';

$buku = query("SELECT * FROM buku");
$penerbit = query("SELECT * FROM penerbit");

if (isset($_POST["cariBuku"])) {
    $buku = cariBuku($_POST["keyword"]);
}

?>

<!doctype html>
<html>
    <head>
        <title>Halaman Awal</title>
        <link rel="stylesheet" href="style/style.css">
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>
            body {
                background-image: url('img/img2.jpg');
                opacity: 0.8;
            }
        </style>

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

        <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Tabel Buku</h5>
        </div>
        </div>

            <br>
            <center><form class="d-flex" action="" method="post">
                <input class="form-control" type="text" name="keyword" placeholder="Cari Buku">
                <button class="btn btn-success" type="submit" name="cariBuku">Cari</button>
            </form></center>
            <br>
            <table class="table table-bordered table-hover">
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

        <!-- bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


        
        
    </body>
</html>