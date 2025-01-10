<?php
    session_start();

        if(!isset($_SESSION)){
            header("location:../login.php");
        }
        if($_SESSION['role'] != 'admin'){
            header("location:../login.php");
        }



?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.12/dist/full.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar bg-base-100  bg-transparent shadow-md">
        <div class="flex-1 ">
            <p class="text-4xl text-gray-800 italic font-bold mx-auto">Halaman Admin</p>
        </div>
        </div>
        <a href="../home.php"><button class="px-4 py-2 text-sm font-medium text-white bg-gray-800 rounded">Home</button></a>
        </div>
    </nav>
    <!-- NAVBAR END -->

    <div class="flex mt-6">
        <div class="w-auto border-2 border-teal-400 mx-auto rounded-lg">
            <table class="mx-auto">
                <tr class="bg-slate-300">
                    <th class="p-3">No</th>
                    <th class="p-3">Nama</th>
                    <th class="p-3">Qty</th>
                    <th class="p-3">Harga</th>
                    <th class="p-3">Setting</th>
                </tr>

                <?php
                    include '../koneksi.php';
                    $query = mysqli_query($conn, 'SELECT produk.*,kategori.* FROM produk INNER JOIN kategori ON produk.id_kategori = kategori.id_kategori;');
                    while ($produk = mysqli_fetch_array($query)){
                ?>

                <tr>
                    <td class="p-3"><?=$produk['id_produk']?></td>
                    <td class="p-3"><?=$produk['nama']?></td>
                    <td class="p-3"><?=$produk['qty']?></td>
                    <td class="p-3"><?=$produk['harga']?></td>
                    <td >
                        <a href="edit_produk.php?id_produk=<?= $produk['id_produk']?>" class="p-3">
                        <button class="btn-xs btn btn-outline btn-warning">Update</button></a>
                        <a href="hapus.php?id_produk=<?= $produk['id_produk']?>" class="p-3">
                        <button class="btn-xs btn btn-outline btn-error">Hapus</button></a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>


    <button class="bg-teal-500 btn-sm text-white rounded-lg text-base hover:bg-teal-600"><a href="tambah_produk.php">Tambah Produk</a></button>


    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>