<?php 

include "koneksi.php";
if (!isset($_GET['id'])) {
    die("ID produk tidak ditemukan");
}

$id = $_GET['id'];

$query = "DELETE FROM produk WHERE id = '$id'";

$result = mysqli_query($koneksi,$query);

if($result) {

header("Location: index.php");
exit;

} else {
    echo "Data gagal dihapus";
    echo "<br>";
    echo "Error: " . mysqli_error($koneksi);
}

?>