<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tambah.css.">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Tambah Produk</h1>

        <form action="simpan.php" method="POST">
           
        <label for="nama_produk">Nama Produk</label>

        <input type="text" id="nama_produk" name="nama_produk" placeholder="Masukkan nama produk" required>

        <label for="harga">Harga</label>

        <input type="number" id="harga" name="harga" placeholder="Masukkan harga" min="0" required>

        <label for="stok">Stok</label>
        <input type="number" id="stok" name="stok" placeholder="Masukkan stok" min="0" required>

        <button type="submit" class="btn-simpan">Simpan</button>

        <a href="index.php" class="btn-kembali"> Kembali</a>
    </div>
</body>
</html>