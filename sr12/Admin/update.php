<?php
include 'koneksi.php';

$id   = $_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$qty = $_POST['qty'];

$sql = "UPDATE produk SET nama='$nama',harga='$harga',qty='$qty' WHERE id='$id'";
$query = mysqli_query($conn, $sql);

header("Location: admin.php");