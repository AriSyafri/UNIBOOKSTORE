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

                <button class="btn btn-success" type="submit" name = "submit">Submit</button>
            </form>

        </div>
        <!-- bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>




        
        
    </body>
</html>