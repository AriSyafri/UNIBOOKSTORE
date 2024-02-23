<?php
//koneksi ke database
$conn = mysqli_connect("localhost","root","","data");
// membuat fungsi query
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambahPenerbit($data) {
    global $conn;

    $id = htmlspecialchars($data["idpenerbit"]);
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $kota = htmlspecialchars($data["kota"]);
    $telp = htmlspecialchars($data["telepon"]);

    $query = "INSERT INTO penerbit
        VALUES
        ('$id', '$nama', '$alamat', '$kota', '$telp')";

    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function tambahBuku($data) {
    global $conn;

    $idBuku = htmlspecialchars($data["idBuku"]);
    $kategori = htmlspecialchars($data["kategori"]);
    $namaBuku = htmlspecialchars($data["namaBuku"]);
    $harga = htmlspecialchars($data["harga"]);
    $stok = htmlspecialchars($data["stok"]);
    $penerbit = htmlspecialchars($data["penerbit"]);

    $query = "INSERT INTO buku
        VALUES
        ('$idBuku', '$kategori', '$namaBuku', '$harga', '$stok','$penerbit' )";

    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function ubahPenerbit($data) {
    
    global $conn;

    $id = htmlspecialchars($data["idpenerbit"]);
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $kota = htmlspecialchars($data["kota"]);
    $telp = htmlspecialchars($data["telepon"]);


    $query = "UPDATE penerbit SET
            nama = '$nama',
            alamat = '$alamat',
            kota = '$kota',
            telepon = '$telp'
            WHERE idpenerbit = '$id'";

    mysqli_query($conn, $query);
    // cek koneksi
    return mysqli_affected_rows($conn);

}

function ubahBuku($data) {
    global $conn;

    $idBuku = htmlspecialchars($data["idBuku"]);
    $kategori = htmlspecialchars($data["kategori"]);
    $namaBuku = htmlspecialchars($data["namaBuku"]);
    $harga = htmlspecialchars($data["harga"]);
    $stok = htmlspecialchars($data["stok"]);
    $penerbit = htmlspecialchars($data["penerbit"]);

    $query = "UPDATE buku SET
    kategori = '$kategori',
    namaBuku = '$namaBuku',
    harga = '$harga',
    stok = '$stok',
    penerbit = '$penerbit'
    WHERE idBuku = '$idBuku'";

    mysqli_query($conn, $query);
    // cek koneksi
    return mysqli_affected_rows($conn);
}

function hapusPenerbit($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM penerbit WHERE idpenerbit = '$id'");
    return mysqli_affected_rows($conn);
}

function hapusBuku($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM buku WHERE idBuku = '$id'");
    return mysqli_affected_rows($conn);
}

function cariBuku($keyword)
{
    $query = "SELECT * FROM buku
    where 
    namaBuku like '%$keyword%'
    ";
    return query($query);
}



?>