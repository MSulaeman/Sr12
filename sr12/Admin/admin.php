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
                    <th class="p-2">No</th>
                    <th class="p-2">Judul</th>
                    <th class="p-2">Qty</th>
                    <th class="p-2">Harga</th>
                    <th class="p-2">Setting</th>
                </tr>

                <?php
                    include 'koneksi.php';
                    $query = mysqli_query($conn, 'SELECT * FROM produk');
                    while ($produk = mysqli_fetch_array($query)){
                ?>

                <tr>
                    <td><?=$produk['id']?></td>
                    <td><?=$produk['nama']?></td>
                    <td><?=$produk['id']?></td>
                    <td><?=$produk['id']?></td>
                    <td>
                        <a href=""><button class="btn-xs btn btn-outline btn-warning">Update</button></a>
                        <a href=""><button class="btn-xs btn btn-outline btn-error">Hapus</button></a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>


    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>