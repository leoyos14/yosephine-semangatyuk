<?php 

include 'koneksi.php';

$data = mysqli_query($koneksi, "SELECT * FROM produk ");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Data Produk Usaha Keluarga</title>
</head>
<body>
    <div class="container">
        <h1>Data Produk Usaha Keluarga</h1>
        <a href="tambah.php" class="tombol">
            + Tambah Produk
        </a>
        <table class="tabel-produk">

        <thead>

        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
</tr>
</thead>
<tbody>
    <?php
    $no = 1;
    while ($produk = mysqli_fetch_array($data)) {
        ?>

        <tr>

        <td><?=  $no++; ?></td>
        <td><?= htmlspecialchars($produk['nama_produk']); ?> 
        <td>
            Rp <?= number_format($produk['harga'], 0, ',', '.'); ?>
        </td>

        <td>
            <?=  $produk['stok']; ?></td>
            <td class="aksi">
                <a href="edit.php"?id=<?=  $produk['id']; ?> class="edit">Edit</a>
                <a href="hapus.php?id=<?=  $produk['id']; ?>" class="hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</a>
            </td>
</tr>
<?php
    }
    ?>
</tbody>
</table>
    </div>
</body>
</html>