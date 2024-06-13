<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div>
    <form action="proses.php" method="POST">
    <h2>LOGIN</h2>

        <label>Username :</label><br> 
        <input style="border-radius: 5px; " type="text" name="username" required><br>

        <label>Password :</label><br>
        <input style="border-radius: 5px;" type="password" name="password" required><br>

        <button type="submit" name="aksi" value="login" class="btn btn-primary"><i class="fa fa-floppy-o"></i> LOGIN</button>
        <p><a href="regist.php">REGISTER</a></p>
    </form>
    </div>
</body>
</html>