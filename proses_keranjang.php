<?php
session_start();
//ambil id produk
$id_produk = $_POST['id_produk'];

$user_id = $_SESSION['id'];
include 'koneksi.php';

$query = mysqli_query($conn,"INSERT INTO cart values(null,'$user_id',now())");
$cart_id = mysqli_insert_id($conn);

$query2 = mysqli_query($conn,"INSERT INTO cart_item values(null,'$cart_id','$id_produk',1,now())");


header("Location: keranjang.php");
?>