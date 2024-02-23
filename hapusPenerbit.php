<?php 

require 'functions.php';
$penerbit = $_GET["idpenerbit"];

if (hapusPenerbit($penerbit) > 0 ) {
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