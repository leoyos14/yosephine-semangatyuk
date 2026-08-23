<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">

    <h1>Tambah Produk</h1>

    <form action="simpan.php" method="POST">

    <label>Nama Produk</label>

    <input type="text" name="nama_prodk" required>

    <label>Harga</label>

    <input type="number" name="harga" required>

    <button type="submit" name="simpan">Simpan</button>
    </form>

    <br>
    <a href="index.php">Kembali</a>
</body>
</html>