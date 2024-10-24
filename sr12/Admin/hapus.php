<?php
include "../koneksi.php";
$nama = $_GET['nama'];
$sql = "DELETE FROM produk WHERE nama ='$nama'";
$query = mysqli_query($conn, $sql);

header("Location: admin.php");