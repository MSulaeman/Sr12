<?php
session_start();
include 'koneksi.php';
$query_p = mysqli_query($conn, "SELECT * FROM produk");
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
                                
                                        <option class="border border-gray-200 rounded-lg p-2"></option>
                                    
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
    <footer class="bg-slate-900 mt-10">
        <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="lg:flex lg:items-start lg:gap-8">
                <div class="text-teal-400">
                    <svg class="h-8" viewBox="0 0 28 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.41 10.3847C1.14777 7.4194 2.85643 4.7861 5.2639 2.90424C7.6714 1.02234 10.6393 0 13.695 0C16.7507 0 19.7186 1.02234 22.1261 2.90424C24.5336 4.7861 26.2422 7.4194 26.98 10.3847H25.78C23.7557 10.3549 21.7729 10.9599 20.11 12.1147C20.014 12.1842 19.9138 12.2477 19.81 12.3047H19.67C19.5662 12.2477 19.466 12.1842 19.37 12.1147C17.6924 10.9866 15.7166 10.3841 13.695 10.3841C11.6734 10.3841 9.6976 10.9866 8.02 12.1147C7.924 12.1842 7.8238 12.2477 7.72 12.3047H7.58C7.4762 12.2477 7.376 12.1842 7.28 12.1147C5.6171 10.9599 3.6343 10.3549 1.61 10.3847H0.41ZM23.62 16.6547C24.236 16.175 24.9995 15.924 25.78 15.9447H27.39V12.7347H25.78C24.4052 12.7181 23.0619 13.146 21.95 13.9547C21.3243 14.416 20.5674 14.6649 19.79 14.6649C19.0126 14.6649 18.2557 14.416 17.63 13.9547C16.4899 13.1611 15.1341 12.7356 13.745 12.7356C12.3559 12.7356 11.0001 13.1611 9.86 13.9547C9.2343 14.416 8.4774 14.6649 7.7 14.6649C6.9226 14.6649 6.1657 14.416 5.54 13.9547C4.4144 13.1356 3.0518 12.7072 1.66 12.7347H0V15.9447H1.61C2.39051 15.924 3.154 16.175 3.77 16.6547C4.908 17.4489 6.2623 17.8747 7.65 17.8747C9.0377 17.8747 10.392 17.4489 11.53 16.6547C12.1468 16.1765 12.9097 15.9257 13.69 15.9447C14.4708 15.9223 15.2348 16.1735 15.85 16.6547C16.9901 17.4484 18.3459 17.8738 19.735 17.8738C21.1241 17.8738 22.4799 17.4484 23.62 16.6547ZM23.62 22.3947C24.236 21.915 24.9995 21.664 25.78 21.6847H27.39V18.4747H25.78C24.4052 18.4581 23.0619 18.886 21.95 19.6947C21.3243 20.156 20.5674 20.4049 19.79 20.4049C19.0126 20.4049 18.2557 20.156 17.63 19.6947C16.4899 18.9011 15.1341 18.4757 13.745 18.4757C12.3559 18.4757 11.0001 18.9011 9.86 19.6947C9.2343 20.156 8.4774 20.4049 7.7 20.4049C6.9226 20.4049 6.1657 20.156 5.54 19.6947C4.4144 18.8757 3.0518 18.4472 1.66 18.4747H0V21.6847H1.61C2.39051 21.664 3.154 21.915 3.77 22.3947C4.908 23.1889 6.2623 23.6147 7.65 23.6147C9.0377 23.6147 10.392 23.1889 11.53 22.3947C12.1468 21.9165 12.9097 21.6657 13.69 21.6847C14.4708 21.6623 15.2348 21.9135 15.85 22.3947C16.9901 23.1884 18.3459 23.6138 19.735 23.6138C21.1241 23.6138 22.4799 23.1884 23.62 22.3947Z"fill="currentColor" />
                    </svg>
                </div>
                <div class="mt-8 grid grid-cols-2 gap-8 lg:mt-0 lg:grid-cols-5 lg:gap-y-16">
                    <div class="col-span-2">
                        <div>
                            <h2 class="text-2xl font-bold text-teal-400">SR12<span class="italic">Lite</span></h2>
                            <p class="mt-4 text-gray-500">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse non cupiditate quae nam
                                molestias.
                            </p>
                        </div>
                    </div>
                    <div class="col-span-2 lg:col-span-3 lg:flex lg:items-end">
                        <form class="w-full">
                            <label for="UserEmail" class="sr-only"> Email </label>
                            <div class="p-2 sm:flex sm:items-center sm:gap-4">
                                <input type="email" id="UserEmail" placeholder="Email" class="w-full rounded sm:text-sm" />
                                <button class="rounded mt-1 w-full bg-teal-500 px-6 py-3 text-sm font-bold uppercase tracking-wide text-white transition-none hover:bg-teal-600 sm:mt-0 sm:w-auto sm:shrink-0">
                                    Send
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <p class="font-medium text-gray-500">Services</p>
                        <ul class="mt-6 space-y-4 text-sm">
                            <li>
                                <a href="#" class="text-gray-700 transition hover:opacity-75"> 1on1 Coaching </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-700 transition hover:opacity-75"> Company Review </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-700 transition hover:opacity-75"> Accounts Review </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-700 transition hover:opacity-75"> HR Consulting </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-700 transition hover:opacity-75"> SEO Optimisation </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <p class="font-medium text-gray-500">Company</p>
                        <ul class="mt-6 space-y-4 text-sm">
                            <li>
                                <a href="#" class="text-gray-700 transition hover:opacity-75"> About </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-700 transition hover:opacity-75"> Meet the Team </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-700 transition hover:opacity-75"> Accounts Review </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <p class="font-medium text-gray-500">Helpful Links</p>
                        <ul class="mt-6 space-y-4 text-sm">
                            <li>
                                <a href="#" class="text-gray-700 transition hover:opacity-75"> Contact </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-700 transition hover:opacity-75"> FAQs </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-700 transition hover:opacity-75"> Live Chat </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <p class="font-medium text-gray-500">Legal</p>
                        <ul class="mt-6 space-y-4 text-sm">
                            <li>
                                <a href="#" class="text-gray-700 transition hover:opacity-75"> Accessibility </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-700 transition hover:opacity-75"> Returns Policy </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-700 transition hover:opacity-75"> Refund Policy </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-700 transition hover:opacity-75"> Hiring Statistics </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <p class="font-medium text-gray-500">Downloads</p>
                        <ul class="mt-6 space-y-4 text-sm">
                            <li>
                                <a href="#" class="text-gray-700 transition hover:opacity-75"> Marketing Calendar </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-700 transition hover:opacity-75"> SEO Infographics </a>
                            </li>
                        </ul>
                    </div>
                    <ul class="col-span-2 flex justify-start gap-6 lg:col-span-5 lg:justify-end">
                        <li>
                            <a
                                href="#"
                                rel="noreferrer"
                                target="_blank"
                                class="text-gray-700 transition hover:opacity-75">
                                <span class="sr-only">Facebook</span>
                                <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                        fill-rule="evenodd"
                                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a
                                href="#"
                                rel="noreferrer"
                                target="_blank"
                                class="text-gray-700 transition hover:opacity-75">
                                <span class="sr-only">Instagram</span>
                                <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                        fill-rule="evenodd"
                                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a
                                href="#"
                                rel="noreferrer"
                                target="_blank"
                                class="text-gray-700 transition hover:opacity-75">
                                <span class="sr-only">Twitter</span>
                                <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a
                                href="#"
                                rel="noreferrer"
                                target="_blank"
                                class="text-gray-700 transition hover:opacity-75">
                                <span class="sr-only">GitHub</span>

                                <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                        fill-rule="evenodd"
                                        d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a
                                href="#"
                                rel="noreferrer"
                                target="_blank"
                                class="text-gray-700 transition hover:opacity-75">
                                <span class="sr-only">Dribbble</span>

                                <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                        fill-rule="evenodd"
                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-8 border-t border-gray-100 pt-8">
                <div class="sm:flex sm:justify-between">
                    <p class="text-xs text-gray-500">&copy; 2025. SR12lite . All rights reserved.</p>
                    <ul class="mt-8 flex flex-wrap justify-start gap-4 text-xs sm:mt-0 lg:justify-end">
                        <li>
                            <a href="#" class="text-gray-500 transition hover:opacity-75"> Terms & Conditions </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-500 transition hover:opacity-75"> Privacy Policy </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-500 transition hover:opacity-75"> Cookies </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>