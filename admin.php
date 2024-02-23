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
        <title>Admin</title>
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
            <center><button onclick="document.location='tambahBuku.php'">Tambah buku</button> </center>
            <br>
            <table border="3" class="center">
                <thead>
                    <tr>
                        <th>ID Buku</th>
                        <th>Kategori</th>
                        <th>Nama Buku</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Penerbit</th>
                        <th>Aksi</th>
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

                        <td style="text-align: center;">
                            <button onclick="document.location='ubahBuku.php?idBuku=<?= $row['idBuku']; ?>'">Ubah</button>
                            <button onclick="document.location='hapusBuku.php?idBuku=<?= $row['idBuku']; ?>'">Hapus</button>
                            
                        </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>


            </table>

            <br>

            <h2><center>Tabel Penerbit</center></h2>
            <center><button onclick="document.location='tambahPenerbit.php'">Tambah buku</button></center>
            <br>
            <table border="3" class="center">
            <thead>
                <tr>
                    <th>ID Penerbit</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Kota</th>
                    <th>Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>


            
            <tbody>
            <?php $i = 0; ?>
                <?php foreach($penerbit as $row) : ?>
                <?php $i++; ?>
                <tr>
                    <td><?= $row["idpenerbit"]?></td>
                    <td><?= $row["nama"]?></td>
                    <td><?= $row["alamat"]?></td>
                    <td><?= $row["kota"]?></td>
                    <td><?= $row["telepon"]?></td>

                    <td style="text-align: center;">
                            <button onclick="document.location='ubahPenerbit.php?idpenerbit=<?= $row['idpenerbit']; ?>'">Ubah</button>
                            <button onclick="document.location='hapusPenerbit.php?idpenerbit=<?= $row['idpenerbit']; ?>'">Hapus</button>
                            
                    </td>
                </tr>
            <?php endforeach; ?>

            </tbody>



            </table>
        </div>


        
        
    </body>
</html>