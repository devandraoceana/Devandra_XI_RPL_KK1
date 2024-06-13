<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <button onclick="location.href='main.php'">Back</button>
    <table>
        <tr>
            <th>No.</th>
            <th>ID</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Password</th>
            <th>Aksi</th>
        </tr>

    <?php 
        include 'koneksi.php';
        $query = mysqli_query($koneksi,"SELECT * FROM pelanggan");
        $no = 1;
        while($lihat = mysqli_fetch_array($query)){
    ?>

        <tr>
            <td><?php echo $no++; ?></td>
			<td><?php echo $lihat['id']; ?></td>
			<td><?php echo $lihat['nama']; ?></td>
			<td><?php echo $lihat['username']; ?></td>
			<td><?php echo $lihat['password']; ?></td>
            <td>
            <Button type="button" class="btn btn-warning">
				<a href="editakun.php?id=<?php echo $lihat['id']?>" style="text-decoration: none; color:black;">Edit
			</a></Button>
			<button type="button" value="delete" class="btn btn-danger">
				<a href="proses.php?id=<?php echo $lihat['id']?>" style="text-decoration: none; color:white">Hapus
			</a></button>
            </td>
        </tr>
    <?php }?>
    </table>
</div>
</body>
</html>