<?php 
include "koneksi.php";

$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$query = "INSERT INTO produk(nama_produk, harga, stok) VALUES ('$nama_produk', '$harga', '$stok')";

$result = mysqli_query($koneksi, $query);

if ($result) {
    header("Location: index.php");
    exit;

} else {
    echo "Data gagal disimpan: " . mysqli_error($koneksi);
}
