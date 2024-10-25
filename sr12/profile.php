<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.12/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=arrow_back" />
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar bg-base-100  bg-transparent shadow-md">
        <a href="home.php">
            <span class="material-symbols-outlined">
                arrow_back
            </span>
        </a>
        <div class="flex-1 text-teal-400 bg-red italic font-mono font-bold">
            <p class="text-4xl mx-auto">SR12<span class="text-lg">Lite</span></p>
        </div>
        <div class="flex-none">
        </div>
        <a href="login.php"><button class="px-4 py-2 text-sm font-medium text-white bg-gray-800 rounded">Logout</button></a>
        </div>
    </nav>
    <!-- NAVBAR END -->


    <div class="flex items-center justify-between p-4 border-b">
        <div class="flex items-center">
            <img alt="User profile picture" class="w-12 h-12 rounded-full" height="50" src="https://storage.googleapis.com/a1aa/image/eYPd2tzYLcVMIK8xJQ1beGyYc1vP7sKBhB16MmOrnp313KqTA.jpg" width="50" />
            <span class="ml-4 text-lg font-semibold">
                <?php session_start(); echo $_SESSION['username']; ?>
            </span>
        </div>

    </div>
    <div class="p-4">
        <h2 class="mb-4 text-center text-lg font-semibold">
            Rincian Pesanan
        </h2>
        <div class="flex justify-around">
            <div class="px-4 py-2 border rounded">
                <span>
                    Pending
                </span>
            </div>
            <div class="px-4 py-2 border rounded">
                <span>
                    Diproses
                </span>
            </div>
            <div class="px-4 py-2 border rounded">
                <span>
                    selesai
                </span>
            </div>
            <div class="px-4 py-2 border rounded">
                <span>
                    Dibatalkan
                </span>
            </div>
        </div>



        <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>