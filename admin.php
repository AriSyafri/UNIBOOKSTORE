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
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


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
            <center><form class="d-flex" action="" method="post">
                <input class="form-control" type="text" name="keyword" placeholder="Cari Buku">
                <button class="btn btn-success" type="submit" name="cariBuku">Cari</button>
            </form></center>
            <center><button class="btn btn-info" onclick="document.location='tambahBuku.php'">Tambah buku</button> </center>
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
                        <th class="d-flex justify-content-center">Aksi</th>
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

                        <td class="d-flex justify-content-center">
                            <a class="btn btn-success m-1" href="ubahBuku.php?idBuku=<?= $row['idBuku']; ?>">Ubah</a>
                            <a class="btn btn-danger m-1" href="hapusBuku.php?idBuku=<?= $row['idBuku']; ?>" onclick="return confirm('yakin?');"> Hapus</a>


                        </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>


            </table>

            <br>

            <h2><center>Tabel Penerbit</center></h2>
            <center><button class="btn btn-info" onclick="document.location='tambahPenerbit.php'">Tambah Penerbit</button></center>
            <br>
            <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID Penerbit</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Kota</th>
                    <th>Telepon</th>
                    <th class="d-flex justify-content-center">Aksi</th>
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

                    <td class="d-flex justify-content-center">
                            <a class="btn btn-success m-1" href="ubahPenerbit.php?idpenerbit=<?= $row['idpenerbit']; ?>">Ubah</a>
                            <a class="btn btn-danger m-1" href="hapusPenerbit.php?idpenerbit=<?= $row['idpenerbit']; ?>" onclick="return confirm('yakin?');"> Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>

            </tbody>



            </table>
        </div>


         <!-- bootstrap -->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>



        
    </body>
</html>