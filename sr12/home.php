<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.12/dist/full.min.css" rel="stylesheet" type="text/css" />
</head>

<body style="height: auto;">
    <!-- NAVBAR -->
    <nav class="navbar bg-base-100  bg-transparent ">
        <div class="flex-1 text-teal-400 bg-red italic font-mono font-bold">
            <p class="text-3xl my-auto">SR12<span class="text-lg">Lite</span></p>
        </div>
        <div class="flex-none">
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
                        <span class="text-lg font-bold">8 Items</span>
                        <span class="text-info">Subtotal: $999</span>
                        <div class="card-actions">
                            <button class="btn btn-primary btn-block">View cart</button>
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
                        <a class="justify-between">Profile</a>
                    </li>
                    <li><a>Settings</a></li>
                    <li><a href="login.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- NAVBAR END -->

    <!-- CARD -->
    <div class=" mx-2 my-auto py-20 gap-1 flex flex-wrap ">
        <div class="card card-compact bg-base-100 w-60 shadow-xl mx-auto hover:scale-105 ">
            <figure>
                <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" alt="Shoes" />
            </figure>
            <div class="card-body">
                <h2 class="card-title">Nike 102</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate, blanditiis?</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>
        <div class="card card-compact bg-base-100 w-60 shadow-xl mx-auto hover:scale-105">
            <figure>
                <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" alt="Shoes" />
            </figure>
            <div class="card-body">
                <h2 class="card-title">Nike 102</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate, blanditiis?</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>
        <div class="card card-compact bg-base-100 w-60 shadow-xl mx-auto hover:scale-105">
            <figure>
                <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" alt="Shoes" />
            </figure>
            <div class="card-body">
                <h2 class="card-title">Nike 102</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate, blanditiis?</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>
        <div class="card card-compact bg-base-100 w-60 shadow-xl mx-auto hover:scale-105">
            <figure>
                <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" alt="Shoes" />
            </figure>
            <div class="card-body">
                <h2 class="card-title">Nike 102</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate, blanditiis?</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>
    </div>
    <!-- CARD END-->


    <div class="container mx-auto">
        <div class="carousel w-full">
            <div id="item1" class="carousel-item w-full">
                <img
                    src="https://img.daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.webp"
                    class="w-full" />
            </div>
            <div id="item2" class="carousel-item w-full">
                <img
                    src="https://img.daisyui.com/images/stock/photo-1609621838510-5ad474b7d25d.webp"
                    class="w-full" />
            </div>
            <div id="item3" class="carousel-item w-full">
                <img
                    src="https://img.daisyui.com/images/stock/photo-1414694762283-acccc27bca85.webp"
                    class="w-full" />
            </div>
            <div id="item4" class="carousel-item w-full">
                <img
                    src="https://img.daisyui.com/images/stock/photo-1665553365602-b2fb8e5d1707.webp"
                    class="w-full" />
            </div>
        </div>
        <div class="flex w-full justify-center gap-2 py-2">
            <a href="#item1" class="btn btn-xs">1</a>
            <a href="#item2" class="btn btn-xs">2</a>
            <a href="#item3" class="btn btn-xs">3</a>
            <a href="#item4" class="btn btn-xs">4</a>
        </div>
    </div>

    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>