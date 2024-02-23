<?php

    require 'functions.php';

    if ( isset($_POST["submit"])) {
        if (tambahPenerbit($_POST) > 0) {
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
            <h2>Menambah Penerbit</h2>
            <form action = "" method = "post">

                <div class="row mb-3">
                    <label>Id Penerbit</label>
                    <input type="text" id="idpenerbit" name="idpenerbit">
                    
                </div>

                <div class="row mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text"id="nama" name="nama">
                    
                </div>


                <div class="row mb-3">
                    <label class="form-label">Alamat</label>
                    <input type="text" id="alamat" name="alamat">
                    
                </div>

                <div class="row mb-3">
                    <label class="form-label">Kota</label>
                    <input type="text" id="kota" name="kota">
                    
                </div>

                <div class="row mb-3">
                    <label class="form-label">Telepon</label>
                    <input type="text" id="telepon" name="telepon">
                </div>

                <button type="submit" name = "submit">Submit</button>
            </form>

        </div>


        
        
    </body>
</html>