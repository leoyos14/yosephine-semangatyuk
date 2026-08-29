<?php 

include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    die("Akses tidak valid");
}

$id = $_POST['id'];
$nama_produk= $_POST['nama_produk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$query ="UPDATE produk SET 
        nama_produk = '$nama_produk',
        harga = '$harga',
        stok = '$stok'
        WHERE id ='$id'";

        $result = mysqli_query($koneksi, $query);

        if($result) {
            header("Location: index.php");
            exit;
        } else {
            echo "Data gagal diupdate.";
            echo "<br>";
            echo "Error: " . mysqli_error($koneksi);
        }
        ?>