<?php
    include '../koneksi.php';

    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $qty = $_POST['qty'];


    $stmt = $conn->prepare("INSERT INTO produk (nama, harga, qty) VALUES (?, ?, ?)");
    $stmt->bind_param("sdi", $nama, $harga, $qty);
    $stmt->execute();


    header("Location: admin.php");

?>