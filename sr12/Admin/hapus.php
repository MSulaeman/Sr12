<?php
include "../koneksi.php";
$id = $_GET['id'];

$queryData = mysqli_query($conn, "SELECT foto FROM produk where id='$id'");
$data = mysqli_fetch_array($queryData);
$fotoLama = $data['foto'];


$sql = "DELETE FROM produk WHERE id ='$id'";
$query = mysqli_query($conn, $sql);

if($query){
    unlink("../foto_produk/$fotoLama");
}

header("Location: admin.php");