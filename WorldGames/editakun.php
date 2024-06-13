<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <form action="proses.php" method="POST">
    <h2>EDIT</h2>
    <?php
        include 'koneksi.php';
        $id = $_GET['id'];
            $query = mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE id = '$id'");
            while ($lihat = mysqli_fetch_array($query)){ ?>
            
        <label>nama:</label><br>
        <input style="border-radius: 5px;" type="text" name="nama" value="<?php echo $lihat['nama']; ?>" required><br>
        
        <input type="hidden" name="id" value="<?php echo $lihat['id']; ?>">
        <label>username:</label><br> 
        <input style="border-radius: 5px; " type="text" name="username" value="<?php echo $lihat['username']; ?>" required><br>

        <label>password:</label><br>
        <input style="border-radius: 5px;" type="password" name="password" value="<?php echo $lihat['password']; ?>" required><br>


    <?php }?>

        <button type="submit" name="cu" value="edit" class="btn btn-primary"><i class="fa fa-floppy-o"></i> EDIT</button>
    </form>
    </div>
</body>
</html>