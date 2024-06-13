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

    <?php
        include 'koneksi.php';
        $id = $_GET['id'];
            $query = mysqli_query($koneksi, "SELECT * FROM akun WHERE id = '$id'");
            while ($lihat = mysqli_fetch_array($query)){ ?>

        <input type="hidden" name="id" value="<?php echo $lihat['id']; ?>">

        <label>Judul :</label><br>
        <input style="border-radius: 5px;" type="text" value="<?php echo $lihat['judul']; ?>" name="judul" placeholder="exm: Akun murah meriah" required><br>
        
        <label>Deskripsi Akun :</label><br> 
        <input style="border-radius: 5px; " type="text" name="deskripsi" value="<?php echo $lihat['deskripsi']; ?>"  required><br>

        <label>Harga :</label><br>
        <input style="border-radius: 5px;" type="number" value="<?php echo $lihat['harga']; ?>" name="harga" required><br>

        <label>Foto Akun :</label><input type="file" name="gambar" value="<?php echo $lihat['gambar']; ?>" /><br>

<?php }?>

        <button type="submit" name="aksi" value="edit" class="btn btn-primary"><i class="fa fa-floppy-o"></i>Edit Produk</button>
        <p><a href="login.php">LOGIN</a></p>
    </form>
</body>
</html>