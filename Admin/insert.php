<?php
    include '../koneksi.php';

    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $qty = $_POST['qty'];
    $deskripsi = $_POST['deskripsi'];

    $foto = $_FILES['foto']['name'];
    $lokasi_tmp = $_FILES['foto']['tmp_name'];


    $sql = "INSERT INTO produk  (`id_produk`,`nama`,`harga`,`qty`,`deskripsi`,`foto`) VALUES (null, '$nama','$harga','$qty','$deskripsi','$foto')";
    $query = mysqli_query($conn, $sql);


    header("Location: admin.php");

    move_uploaded_file($lokasi_tmp,"../foto_produk/$foto");
?>