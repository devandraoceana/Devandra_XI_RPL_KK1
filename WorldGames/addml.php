<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proses.php" method="POST">
    <h2>REGISTER</h2>
        <label>Judul :</label><br>
        <input style="border-radius: 5px;" type="text" name="judul" placeholder="exm: Akun murah meriah" required><br>
        
        <label>Deskripsi Akun :</label><br> 
        <input style="border-radius: 5px; " type="text" name="deskripsi" required><br>

        <label>Harga :</label><br>
        <input style="border-radius: 5px;" type="number" name="harga" required><br>

        <label>Foto Akun :</label><input type="file" name="gambar"><br>

        <button type="submit" name="cu" value="add" class="btn btn-primary"><i class="fa fa-floppy-o"></i> Tambah Produk</button>
        <p><a href="login.php">LOGIN</a></p>
    </form>
</body>
</html>