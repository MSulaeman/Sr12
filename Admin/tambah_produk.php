<?php 
session_start();
if(!isset($_SESSION)){
    header("location:../login.php");
}

if($_SESSION['role'] != 'admin'){
    header("location:../login.php");
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.12/dist/full.min.css" rel="stylesheet">
    <title>Tambah</title>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h2 class="text-2xl font-semibold mb-6 text-center">Tambah Data</h2>
        <form action="insert.php" method="post" enctype="multipart/form-data">
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" id="name" name="nama" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring ">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Harga</label>
                <input type="text" id="email" name="harga" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring ">
            </div>
            <div class="mb-4">
                <label for="message" class="block text-sm font-medium text-gray-700">Qty</label>
                <input type="number" id="message" name="qty" rows="4" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring "></input>
            </div>
            <div class="mb-4">
                <label for="message" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                <textarea name="deskripsi" class="textarea textarea-accent mt-1 block w-full border border-gray-300 rounded-md " placeholder="deskripsi"></textarea>
            </div>
            <!-- input foto -->
            <div class="mb-4">
                <label for="message" class="block text-sm font-medium text-gray-700">Foto</label>
                <input type="file" name="foto" class="file-input file-input-bordered border border-gray-300 rounded-md max-w-xs" />
            </div>
            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 rounded-md">Kirim</button>
        </form>
    </div>

    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>