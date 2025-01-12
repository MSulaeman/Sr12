<?php
session_start();
include 'koneksi.php';
$query_p = mysqli_query($conn, "SELECT * FROM produk");
$query_k = mysqli_query($conn, "SELECT * FROM kategori"); 
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.12/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body class="scroll-smooth ">
    <!-- NAVBAR -->
    <nav class="navbar h-4 bg-white shadow-md">
        <div class="navbar-start">
            <!-- Dropdown for mobile -->
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                    <li><a>Home</a></li>
                    <li>
                        <a>Kategori</a>
                        <ul class="p-2">
                            <li><a>Masker Wajah</a></li>
                            <li><a>Masker Rambut</a></li>
                        </ul>
                    </li>
                    <li><a>About</a></li>
                </ul>
            </div>
            <!-- Logo -->

            <div class="text-4xl ml-7 font-mono font-bold italic">SR12<span class="text-lg">Lite</span></div>
        </div>

        <div class="navbar-center hidden lg:flex z-10 text-black">
            <!-- Menu for desktop -->
            <ul class="menu menu-horizontal px-1 ">
                <li><a href="home.php">Home</a></li>
                <li>
                    <details class="dropdown">
                        <summary class="">Kategori</summary>
                        <ul class="p-2 text-black">
                            <li><a class="p-2">
                                <?php
                                    while ($row = mysqli_fetch_array($query_k)){?>
                                    <option class="border border-gray-200 rounded-lg p-2" value="<?=$row['id_kategori']?>"><?=$row['kategori']?></option>
                                <?php } ?>
                            </a></li>
                        </ul>
                    </details>
                </li>
                <li><a>About</a></li>
            </ul>
        </div>

        <div class="navbar-end flex-none">
            <label class="input input-bordered flex items-center gap-2 h-8">
                <input type="text" class="grow" placeholder="Search" />
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 16 16"
                    fill="currentColor"
                    class="h-4 w-4 opacity-70">
                    <path fill-rule="evenodd" d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z" clip-rule="evenodd" />
                </svg>
            </label>


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
                            <a href="keranjang.php" class="btn bg-teal-500 text-white hover:bg-teal-600">
                                <button type="submit">View Cart</button>
                            </a>
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
                <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-60 p-2 shadow">
                    <li>
                        <a href="profile.php" class="justify-between">Profile</a>
                    </li>
                    <li><a href="login.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- NAVBAR END -->

    <!-- CARD SECTION-->
    <div class="container mx-auto my-14 flex gap-10 ">
        <?php
        while ($produk = mysqli_fetch_array($query_p)) {
        ?>
            <a href="detailp.php?id_produk=<?= $produk['id_produk'] ?>">
                <div class="card card-compact bg-wite rounded-lg border border-gray-100 transition-all duration-200 w-60 shadow-md hover:scale-105 ">
                    <figure>
                        <img src="foto_produk/<?php echo $produk['foto'] ?>" class="w-36 p-2">
                    </figure>
                    <div class="p-6">
                        <h2 class="text-lg text-gray-900 font-bold"><?php echo $produk['nama'] ?></h2>
                        <p class="font-medium">Rp<?php echo $produk['harga'] ?></p>
                        <p class="text-gray-500 mt-3 line-clamp-3"><?php echo $produk['deskripsi'] ?></p>
                        <div class=" justify-start mt-3">
                            <button class="btn bg-teal-400  text-white hover:bg-teal-600">Beli Sekarang</button>
                        </div>
                    </div>
                </div>
            </a>
        <?php } ?>
    </div>
    <!-- CARD END -->

    <!-- HERO SECTION -->
    <div class="container mx-auto ">
        <div class="hero bg-base-200 rounded-md">
            <div class="hero-content flex-col lg:flex-row">
                <img src="https://img.daisyui.com/images/stock/photo-1635805737707-575885ab0820.webp"
                    class="max-w-sm rounded-lg shadow-2xl" />
                <div>
                    <h1 class="text-5xl font-bold">Spiderman!</h1>
                    <p class="py-6">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum soluta aliquid adipisci nam
                        neque, voluptatem nemo esse eligendi omnis id et recusandae labore quis vitae! Molestias ipsa id
                        laborum odit.
                    </p>
                    <button class="btn bg-teal-400 hover:bg-teal-600 text-white">Get Started</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end hero -->

    <!-- footer -->
    <footer class="bg-slate-900 mt-8 ">
        <div class="relative mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8 lg:pt-24">
            <div class="absolute end-4 top-4 sm:end-6 sm:top-6 lg:end-8 lg:top-8">
                <a
                    class="inline-block rounded-full bg-teal-600 p-2 text-white shadow transition hover:bg-teal-400 sm:p-3 lg:p-4"
                    href="#">
                    <span class="sr-only">Back to top</span>

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="size-5"
                        viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            fill-rule="evenodd"
                            d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>

            <div class="lg:flex lg:items-end lg:justify-between">
                <div>
                    <div class="flex justify-center text-teal-500 lg:justify-start">
                        <p class="italic text-4xl">SR12<span class="text-lg">Lite</span></p>
                    </div>

                    <p class="mx-auto mt-6 max-w-md text-center leading-relaxed text-gray-300 lg:text-left">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt consequuntur amet culpa
                        cum itaque neque.
                    </p>
                </div>

                <ul
                    class="mt-12 flex flex-wrap justify-center gap-6 md:gap-8 lg:mt-0 lg:justify-end lg:gap-12">
                    <li>
                        <a class="text-gray-300 transition hover:text-white" href="#"> About </a>
                    </li>

                    <li>
                        <a class="text-gray-300 transition hover:text-white" href="#"> Services </a>
                    </li>

                    <li>
                        <a class="text-gray-300 transition hover:text-white" href="#"> Projects </a>
                    </li>

                    <li>
                        <a class="text-gray-300 transition hover:text-white" href="#"> Blog </a>
                    </li>
                </ul>
            </div>

            <p class="mt-12 text-center text-sm text-gray-500 lg:text-right">
                Copyright &copy; 2025. All rights reserved.
            </p>
        </div>
    </footer>
    <!-- end footer -->
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>