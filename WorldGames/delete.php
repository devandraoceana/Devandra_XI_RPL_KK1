<?php
include 'koneksi.php';
$id = $_GET['id']; {
    $query = "DELETE FROM akun WHERE id = '$id'";
    $sql = mysqli_query($koneksi, $query);
    header("Location:main.php");
}
?>