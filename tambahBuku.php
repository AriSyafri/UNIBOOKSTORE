<?php

    require 'functions.php';

    if ( isset($_POST["submit"])) {
        if (tambahBuku($_POST) > 0) {
            echo "
                <script>
                    alert ('data berhasil ditambahkan');
                    document.location.href = 'admin.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert ('data gagal ditambahkan');
                    document.location.href = 'admin.php';
                </script>
            ";
        }
    }


?>


<html>
    <head>
        <title>Menambah Buku</title>
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
            <h2>Menambah Buku</h2>
            <form action = "" method = "post">

                <div class="row mb-3">
                    <label>Id Buku</label>
                    <input type="text" id="idBuku" name="idBuku">
                    
                </div>

                <div class="row mb-3">
                    <label class="form-label">Kategori</label>
                    <input type="text"id="kategori" name="kategori">
                    
                </div>


                <div class="row mb-3">
                    <label class="form-label">Nama Buku</label>
                    <input type="text" id="namaBuku" name="namaBuku" size="50">
                    
                </div>

                <div class="row mb-3">
                    <label class="form-label">Harga</label>
                    <input type="text" id="harga" name="harga">
                    
                </div>

                <div class="row mb-3">
                    <label class="form-label">Stok</label>
                    <input type="text" id="stok" name="stok">
                </div>

                <div class="row mb-3">
                    <label class="form-label">Penerbit</label>
                    <input type="text" id="penerbit" name="penerbit">
                </div>

                <button type="submit" name = "submit">Submit</button>
            </form>

        </div>


        
        
    </body>
</html>