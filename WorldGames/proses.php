<?php
include 'koneksi.php';
if (isset($_POST['aksi'])) {

    //REGIST 
    if ($_POST['aksi'] == "regist") {
        $simpan = mysqli_query($koneksi,"INSERT INTO pelanggan (id,nama, username, password) VALUES ('',
        '$_POST[nama]',
        '$_POST[username]',
        '$_POST[password]');") 
        or die (mysqli_error($koneksi));

        if ($simpan) {
            echo "<script>alert('Berhasil Membuat Akun') </script>";
            echo "<script> window.location ='login.php'; </script>";
        } else {
            echo "Gagal mendaftarkan akun";
            header("location: regist.php");
        }
        mysqli_close($koneksi);
    }
    
    //LOGIN
    if ($_POST['aksi'] == "login") {
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password']; 
            if (!empty($username) && !empty($password)) {
                $sql = mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE 
                username='$username' AND password='$password';");
                $ketemu = mysqli_num_rows($sql);
                if ($ketemu == 1) {
                    session_start();
                    while ($user = mysqli_fetch_array($sql)) {
                        $username = $user[2];
                        $password = $user [3];
                        $_SESSION['username'] = $username;
                        $_SESSION['password'] = $password;
                        Header("Location:main.php");}
                }else {
                    echo "<script>alert('Username & Password yang Bener MEMEK ') </script>";
                    echo "<script> window.location ='login.php'; </script>";
                }
        
            } else {
                echo "<script> alert('ISI MEK') </script>";
                echo "<script> window.location ='login.php'; </script>";
            }
        }
    }

    //EDIT PRODUK
    if($_POST['aksi'] == "edit") {
        $edit = mysqli_query($koneksi, "UPDATE akun set 
        id = '$_POST[id]',
        judul = '$_POST[judul]',
        deskripsi = '$_POST[deskripsi]',
        harga = '$_POST[harga]',
        gambar = '$_POST[gambar]'
        where id = '$_POST[id]'") or die(mysqli_error($koneksi));

        if ($edit) {
            header("location: main.php");
            mysqli_close($koneksi);
        } else {
            echo "Data yang anda masukan gagal";
            header("location: editml.php");
        }        mysqli_close($koneksi);
    }
}

else if (isset($_POST['cu'])) {
    if ($_POST['cu'] == "add") {
            $simpan = mysqli_query($koneksi,"INSERT INTO akun (id, judul, deskripsi, harga, gambar) VALUES ('',
            '$_POST[judul]',
            '$_POST[deskripsi]',
            '$_POST[harga]',
            '$_POST[gambar]');") 
            or die (mysqli_error($koneksi));
    
            if ($simpan) {
                echo "<script>alert('Berhasil Menambahkan Produk') </script>";
                echo "<script> window.location ='main.php'; </script>";
            } else {
                echo "Gagal mendaftarkan akun";
                header("location: addml.php");
            }
            mysqli_close($koneksi);
    }
    if ($_POST['cu'] == "edit") {
        $edit = mysqli_query($koneksi, "UPDATE pelanggan set 
        id = '$_POST[id]',
        nama = '$_POST[nama]',
        username = '$_POST[username]',
        password = '$_POST[password]'
        where id = '$_POST[id]'") or die(mysqli_error($koneksi));

        if ($edit) {
            header("location: user.php");
            mysqli_close($koneksi);
        } else {
            echo "Data yang anda masukan gagal";
            header("location: editakun.php");
        }        mysqli_close($koneksi);
    }
} 

$id = $_GET['id']; {
    $query = "DELETE FROM pelanggan WHERE id = '$id'";
    $sql = mysqli_query($koneksi, $query);
    header("Location:user.php");
}