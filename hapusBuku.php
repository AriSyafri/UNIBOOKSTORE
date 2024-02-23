<?php 

require 'functions.php';
$buku = $_GET["idBuku"];

if (hapusBuku($buku) > 0 ) {
    echo "
        <script>
            alert('data berhasil dihapus');
            document.location.href= 'admin.php';

        </script>
    ";
} else {
    echo "
        <script>
            alert('data gagal dihapus, periksa apakah ada tabel berelasi');
            document.location.href= 'admin.php';
        </script>
    ";
}




?>