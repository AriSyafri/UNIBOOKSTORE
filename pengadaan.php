<?php

require 'functions.php';

$buku = query("SELECT * FROM buku ORDER BY stok ASC");

?>


<html>
    <head>
        <title>Penggadaan</title>
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
            <h2><center>Tabel Penggadaan</center></h2>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Nama Buku</th>
                        <th>Penerbit</th>
                        <th>Stok</th>

                    </tr>
                </thead>
                <tbody>
                <?php $i = 0; ?>
                    <?php foreach($buku as $row) : ?>
                    <?php $i++; ?>
                    <tr>
                        <td><?= $row["namaBuku"]?></td>
                        <td><?= $row["penerbit"]?></td>
                        <!-- <td><?= $row["stok"]?></td> -->
                        <td><?php if ($row["stok"] < 5) { 
                            echo  "Perlu segera dibeli";
                        } else {
                            echo $row["stok"];
                        }
                            ?></td>
                    </tr>
                <?php endforeach; ?>

                </tbody>
                </table>

        </div>

         <!-- bootstrap -->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>



        
        
    </body>
</html>