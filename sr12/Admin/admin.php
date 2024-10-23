<?php
    session_start();
    // //kalau dia tidak login
    // if(!isset($_SESSION)){
    //     header('location: login.php');
    // }

    // if($_SESSION['role'] != "admin"){
    //     echo "anda tidak memiliki akses";
    //     die();
    // }

?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.12/dist/full.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar bg-base-100  bg-transparent shadow-md">
        <div class="flex-1 ">
            <p class="text-4xl text-teal-400  italic font-bold mx-auto">Halaman Admin</p>
        </div>
    </nav>
    <!-- NAVBAR END -->

    <div class="flex mt-6">
        <div class="w-96 border-2 border-teal-400 mx-auto rounded-lg">
            <table class="mx-auto">
                <tr>
                    <th class="p-3">No</th>
                    <th class="p-3">Judul</th>
                    <th class="p-3">Qty</th>
                    <th class="p-3">Harga</th>
                    <th class="p-3">Setting</th>
                </tr>

                <?php
                    include '../koneksi.php';
                    $query = mysqli_query($conn, 'SELECT * FROM produk');
                    while ($produk = mysqli_fetch_array($query)){
                ?>

                <tr>
                    <td class="p-3"><?=$produk['id']?></td>
                    <td class="p-3"><?=$produk['nama']?></td>
                    <td class="p-3"><?=$produk['qty']?></td>
                    <td class="p-3"><?=$produk['harga']?></td>
                    <td >
                        <a href=""class="p-3"><button class="btn-xs btn btn-outline btn-warning">Update</button></a>
                        <a href="" class="p-3"><button class="btn-xs btn btn-outline btn-error">Hapus</button></a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>


    <button class="bg-teal-400 btn-sm text-white rounded-lg text-base hover:bg-teal-600"><a href="tambah_produk.php">Tambah Produk</a></button>


    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>