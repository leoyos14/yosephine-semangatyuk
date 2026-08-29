<?php

include 'koneksi.php';
if (!isset($_GET['id'])) {
    die("ID tidak diitemukan. Silakan kembali ke halaman produk.");
}

$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id = '$id'");

$produk = mysqli_fetch_assoc($query);

if(!$produk) {
    die("Produk dengan ID tersebut tidak di temukan");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="edit.css">
    <title>Edit Produk</title>
</head>
<body>
    <div class="container">
        <h1>Edit Produk</h1>
        <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $produk  ['id']; ?>">
        <label for="nama_produk">Nama Produk</label>
        <input type="text" id="nama_produk" name="nama_produk" value="<?= htmlspecialchars($produk['nama_produk']); ?>" required>
        <label for="harga">Harga</label>
        <input type="number" id="harga" name="harga" value="<?= $produk['harga'];  ?>"  min="0" required>
        <label for="stok">Stok</label>
        <input type="number" id="stok" name="stok" value="<?= $produk['stok']; ?>" min="0" required>
        <button type="submit" class="btn-update">Update</button>
        <a href="index.php" class="btn-kembali">Kembali</a>
</form>
    </div>
</body>
</html>