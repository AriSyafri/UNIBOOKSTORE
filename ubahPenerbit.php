<?php

    require 'functions.php';

    if ( isset($_POST["submit"])) {
        if (ubahPenerbit($_POST) > 0) {
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

    $penerbit = $_GET["idpenerbit"];
    $pnbt = query("SELECT * FROM penerbit WHERE idpenerbit = '$penerbit'")[0];


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
            <h2>Mengubah Penerbit</h2>
            <form action = "" method = "post">
                <input type="hidden" id="idpenerbit" name="idpenerbit" value="<?= $pnbt["idpenerbit"]; ?>">


                <div class="row mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text"id="nama" name="nama" value="<?= $pnbt["nama"]; ?>">
                    
                </div>


                <div class="row mb-3">
                    <label class="form-label">Alamat</label>
                    <input type="text" id="alamat" name="alamat" value="<?= $pnbt["alamat"]; ?>">
                    
                </div>

                <div class="row mb-3">
                    <label class="form-label">Kota</label>
                    <input type="text" id="kota" name="kota" value="<?= $pnbt["kota"]; ?>">
                    
                </div>

                <div class="row mb-3">
                    <label class="form-label">Telepon</label>
                    <input type="text" id="telepon" name="telepon" value="<?= $pnbt["telepon"]; ?>">
                </div>

                <button type="submit" name = "submit">Submit</button>
            </form>

        </div>


        
        
    </body>
</html>