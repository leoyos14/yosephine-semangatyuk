<?php

include "koneksi.php";

$data = mysqli_query($koneksi, "SELECT * FROM produk");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Data Produk</title>
</head>
<body>
    <div class="container">
        <h1>Data Produk Usaha Keluarga</h1>

        <a href="tambah.php" class="tombol">Tambah Produk</a>

        <table>
        <tr>
            <th>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
        </tr>

        <?php

        $no = 1;

         while ($produk = mysqli_fetch_assoc($data)) {
        ?>

        <tr>
            <td><?= $no++; ?></td>
            <td><?= $produk['nama_produk']; ?></td>
            <td>Rp <?=  number_format($produk['harga'], 0, ',', '.') ?></td>
            <td><?= $produk['stok']; ?></td>
            <td>
                <a href="edit.php?id=<?= $produk['id']; ?>" class="edit">Edit</a>
                <a href="hapus.php?id=<?= $produk['id']; ?>" class="hapus" onclick="return confirm('Yakin ingin menghapus produk ini?')">Hapus</a>
            </td>
        </tr>

        <?php } ?>
</table>
    </div>
</body>
</html>