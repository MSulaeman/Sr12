<?php
include 'koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>keranjang</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.12/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=arrow_back" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=delete" />
</head>

<body class="scroll-smooth ">
    <!-- NAVBAR -->
    <nav class="navbar bg-base-100  bg-white shadow-md">
        <a href="home.php">
        <span class="material-symbols-outlined">
            arrow_back
        </span>
        </a>
        <div class="flex-1 text-slate-800 bg-red italic font-mono font-bold">
            <p class="text-4xl mx-auto">SR12<span class="text-lg">Lite</span></p>
        </div>
        <div class="flex-none">


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
    <!-- NAVBAR END -->

    <!-- TABLE -->

    <div class="overflow-x-auto flex">
        <table class="table mx-auto">
            <!-- head -->
            <thead class="text-lg text-slate-700">
                <tr>
                    <th></th>
                    <th>Produk</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Setting</th>
                </tr>
            </thead>
            <tbody>
                <!-- row 1 -->
                <tr>
                    <th>
                        <label>
                            <input type="checkbox" class="checkbox" />
                        </label>
                    </th>
                    <td>
                        <div class="flex items-center gap-3">
                            <div class="avatar">
                                <div class="mask mask-squircle h-12 w-12">
                                    <img
                                        src="https://img.daisyui.com/images/profile/demo/2@94.webp"
                                        alt="Avatar Tailwind CSS Component" />
                                </div>
                            </div>
                            <div>
                                <div class="font-bold">John Doe</div>
                                <div class="text-sm opacity-50">United States</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        Zemlak, Daniel and Leannon
                        <br />
                        <span class="badge badge-ghost badge-sm">Desktop Support Technician</span>
                    </td>
                    <td>Purple</td>
                    <th>
                        <button class="btn btn-ghost btn-xs" type="submit">
                            <span class="material-symbols-outlined">delete</span>
                        </button>
                    </th>
                </tr>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- TABLE END -->


    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>