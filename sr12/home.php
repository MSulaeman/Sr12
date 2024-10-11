<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.12/dist/full.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="h-96">
    <!-- NAVBAR -->
    <nav class="navbar bg-base-100 bg-transparent">
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
                            <li><a>Submenu 1</a></li>
                            <li><a>Submenu 2</a></li>
                        </ul>
                    </li>
                    <li><a>About</a></li>
                </ul>
            </div>
            <!-- Logo -->
            <a class="btn btn-ghost text-xl">SR12lite</a>
        </div>

        <div class="navbar-center hidden lg:flex">
            <!-- Menu for desktop -->
            <ul class="menu menu-horizontal px-1">
                <li><a>Home</a></li>
                <li>
                    <details>
                        <summary>Kategori</summary>
                        <ul class="p-2">
                            <li><a>Submenu 1</a></li>
                            <li><a>Submenu 2</a></li>
                        </ul>
                    </details>
                </li>
                <li><a>about</a></li>
            </ul>
        </div>

        <div class="navbar-end flex-none">
            <input type="text" placeholder="Search" class="input input-bordered w-24 md:w-auto" />
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
                <div tabindex="0" class="card card-compact dropdown-content bg-base-100 z-[1] mt-3 w-60 shadow">
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
                        <a class="justify-between">Profile</a>
                    </li>
                    <li><a>Settings</a></li>
                    <li><a href="login.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- NAVBAR END -->

    <!-- CARD SECTION-->
    <div class="mx-2 my-auto py-20 gap-1 flex flex-wrap">
        <div class="card card-compact bg-base-100 w-60 shadow-xl mx-auto hover:scale-105 ">
            <figure>
                <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" alt="Shoes" />
            </figure>
            <div class="card-body">
                <h2 class="card-title">Nike 102</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate, blanditiis?</p>
                <div class="card-actions justify-end">
                    <button class="btn bg-teal-400 text-white hover:bg-teal-600">Buy Now</button>
                </div>
            </div>
        </div>
        <div class="card card-compact bg-base-100 w-60 shadow-xl mx-auto hover:scale-105 ">
            <figure>
                <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" alt="Shoes" />
            </figure>
            <div class="card-body">
                <h2 class="card-title">Nike 102</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate, blanditiis?</p>
                <div class="card-actions justify-end">
                    <button class="btn bg-teal-400 text-white hover:bg-teal-600">Buy Now</button>
                </div>
            </div>
        </div>
        <div class="card card-compact bg-base-100 w-60 shadow-xl mx-auto hover:scale-105 ">
            <figure>
                <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" alt="Shoes" />
            </figure>
            <div class="card-body">
                <h2 class="card-title">Nike 102</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate, blanditiis?</p>
                <div class="card-actions justify-end">
                    <button class="btn bg-teal-400 text-white hover:bg-teal-600">Buy Now</button>
                </div>
            </div>
        </div>
        <div class="card card-compact bg-base-100 w-60 shadow-xl mx-auto hover:scale-105 ">
            <figure>
                <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" alt="Shoes" />
            </figure>
            <div class="card-body">
                <h2 class="card-title">Nike 102</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate, blanditiis?</p>
                <div class="card-actions justify-end">
                    <button class="btn bg-teal-400 text-white hover:bg-teal-600">Buy Now</button>
                </div>
            </div>
        </div>
        <!-- Add other card items similarly... -->
    </div>
    <!-- CARD END -->

    <!-- HERO SECTION -->
    <div class="container mx-auto">
        <div class="hero bg-base-200">
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

    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>
