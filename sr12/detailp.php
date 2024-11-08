<?php
session_start();
include 'koneksi.php';
$id    = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM produk where id=$id");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.12/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=arrow_back" />
</head>

<body class="">

    <nav class="flex bg-base-100  bg-white mt-2">
        <a href="home.php" class="my-auto ml-7">
            <span class="material-symbols-outlined">
                arrow_back
            </span>
        </a>
        <div class="mx-auto text-slate-800 bg-red italic font-mono font-bold">
            <p class="text-4xl ">SR12<span class="text-lg">Lite</span></p>
        </div>
        <div class="">
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                    <div class="indicator">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                </div>
                <div tabindex="0" class="card card-compact dropdown-content bg-base-100 z-[1] mt-3 w-60 shadow ">
                    <div class="card-body">
                        <span class="text-lg font-bold">0 Items</span>
                        <span class="text-info">Subtotal: $0</span>
                        <div class="">
                            <a href="keranjang.php" class="btn bg-teal-400 text-white hover:bg-teal-600">
                                <button type="submit">View Cart</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                <div class="avatar placeholder">
                    <div class="bg-neutral text-neutral-content w-8 rounded-full">
                        <span class="text-xs">UI</span>
                    </div>
                </div>
            </div>
            <ul tabindex="0"
                class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-60 p-2 shadow">
                <li>
                    <a href="profile.php" class="justify-between">Profile</a>
                </li>
                <li><a href="login.php">Logout</a></li>
            </ul>
        </div>
        </div>
    </nav>

    <div class="container mx-auto my-14 flex  border border-black">
        <?php
        $produk = mysqli_fetch_array($query)
        ?>
        <div class="w-1/2 rounded-md shadow-md mx-auto border border-black">
            <figure>
                <img src="foto_produk/<?php echo $produk['foto'] ?>" class="w-full">
            </figure>
        </div>
        <div class="border w-1/2">
            <h1 class="text-5xl"> <?php echo $produk['nama'] ?></h1>
            <p class="text-2xl mt-5">RP.<?php echo $produk['harga'] ?></p>
            <p class="mt-10">Deskripsi</p>
            <p><?php echo $produk['deskripsi'] ?></p>
        </div>
    </div>

    

    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>