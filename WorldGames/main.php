<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <nav>
        <h1>RDshopp</h1>
        <div style="display: flex; align-items: center;">
            <ul>
                <li><a href="user.php">User</a></li>
                <li><a href="">Kontak</a></li>
            </ul>
            <h3><a href="logout.php">Logout</a></h3>
        </div>
    </nav>

    <img class="imbg" src="image/MobileLegend.jpg" alt="">

    <h1>Akun Mobile Legend</h1>

    <button onclick="location.href='addml.php'" name="cu" value="add">Add Akun</button>

    <div class="isi">

    <?php 
        include 'koneksi.php';
        $query = mysqli_query($koneksi,"SELECT * FROM akun");
        $no = 1;
        while($lihat = mysqli_fetch_array($query)){
    ?>
        <div class="card">
            <div style="display: flex;">
                <button><a href="editml.php?id=<?php echo $lihat['id']?>">update</a></button>
                <button><a href="delete.php?id=<?php echo $lihat['id']?>">delete</a></button>
            </div>
            <div class="list" onclick="location.href='akunml.php'">
                <img src="image/<?php echo $lihat['gambar']?>" alt="<?php echo $lihat['gambar']?>">
                <div class="desk">
                    <label><?php echo $lihat['judul']?></label><br>
                    <label style="font-size:30px; margin-top:20px; color:red; "><?php echo $lihat['harga']?></label>
                </div>
            </div>
        </div>

    <?php }?>

    </div>
</body>
</html>