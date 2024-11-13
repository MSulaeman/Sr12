<?php
session_start();
include 'koneksi.php';

if(!isset($_GET['id_produk'])){
    header("Location:home.php");
}

$id    = $_GET['id_produk'];
$query = mysqli_query($conn, "SELECT * FROM produk where id_produk=$id");

    $dataproduk = mysqli_num_rows($query);

        if($dataproduk == 0){ 
            echo "<h1>Data Tidak Ditemukan</h1>";
            die();
        }
        $produk = mysqli_fetch_array($query)
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

        

    
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1  lg:grid-cols-2 gap-8 lg:gap-16">
            <div class="slider-box w-full h-full  max-lg:mx-auto mx-0">
                <div class="swiper main-slide-carousel swiper-container relative mb-6">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide ">
                            <img src="foto_produk/<?php echo $produk['foto'] ?>" alt="Product Image" class="max-lg:mx-auto rounded-2xl object-cover">
                        </div>
                        <!-- Tambahkan lebih banyak gambar di sini -->
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center">
                <div class="pro-detail  w-full max-lg:max-w-[608px] lg:pl-8 xl:pl-16 max-lg:mx-auto max-lg:mt-8">
                    <h2 class="font-manrope font-bold text-3xl leading-10 text-gray-900 mb-2"><?php echo $produk['nama'] ?></h2>
                    <p class="font-normal text-base text-gray-500"><?php echo $produk['deskripsi'] ?></p>
                    <div class="flex items-center">
                        <h5 class="font-manrope font-semibold text-2xl leading-9 text-gray-900">RP.<?php echo $produk['harga'] ?></h5>
                        <span class="ml-3 font-semibold text-lg text-black">30% off</span>
                    </div>
                    <div class="flex items-center gap-3 mt-4">
                        <button class="text-center w-full px-5 py-4 rounded-[100px] bg-black flex items-center justify-center font-semibold text-lg text-white shadow-sm transition-all duration-75 hover:bg-white hover:text-black">Add to Cart</button>
                        <button class="text-center w-full px-5 py-4 rounded-[100px] bg-teal-400 flex items-center justify-center font-semibold text-lg text-white shadow-sm transition-all duration-75 hover:bg-teal-600">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>