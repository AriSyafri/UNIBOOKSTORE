<?php

    require 'functions.php';

    if ( isset($_POST["submit"])) {
        if (ubahBuku($_POST) > 0) {
            echo "
                <script>
                    alert ('data berhasil diubah');
                    document.location.href = 'admin.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert ('data gagal diubah');
                    document.location.href = 'admin.php';
                </script>
            ";
        }
    }
    $buku = $_GET["idBuku"];
    $bk = query("SELECT * FROM buku WHERE idBuku = '$buku'")[0];



?>


<html>
    <head>
        <title>Mengubah Buku</title>
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
            <h2>Mengubah Buku</h2>
            <form action = "" method = "post">

                <input type="hidden" id="idBuku" name="idBuku" value="<?= $bk["idBuku"]; ?>">


                <div class="row mb-3">
                    <label class="form-label">Kategori</label>
                    <input type="text"id="kategori" name="kategori" value="<?= $bk["kategori"]; ?>">
                    
                </div>


                <div class="row mb-3">
                    <label class="form-label">Nama Buku</label>
                    <input type="text" id="namaBuku" name="namaBuku"  size="50" value="<?= $bk["namaBuku"]; ?>">
                    
                </div>

                <div class="row mb-3">
                    <label class="form-label">Harga</label>
                    <input type="text" id="harga" name="harga" value="<?= $bk["harga"]; ?>">
                    
                </div>

                <div class="row mb-3">
                    <label class="form-label">Stok</label>
                    <input type="text" id="stok" name="stok" value="<?= $bk["stok"]; ?>">
                </div>

                <div class="row mb-3">
                    <label class="form-label">Penerbit</label>
                    <input type="text" id="penerbit" name="penerbit" value="<?= $bk["penerbit"]; ?>">
                </div>

                <button class="btn btn-info" type="submit" name = "submit">Submit</button>
            </form>

        </div>

         <!-- bootstrap -->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>




        
        
    </body>
</html>