<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Form Input dengan Tailwind CSS</title>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h2 class="text-2xl font-semibold mb-6 text-center">Tambah Data</h2>
        <form action="insert.php" method="post">
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" id="name" name="nama" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:text-teal-400">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Harga</label>
                <input type="text" id="email" name="harga" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:text-teal-400">
            </div>
            <div class="mb-4">
                <label for="message" class="block text-sm font-medium text-gray-700">Qty</label>
                <input type="number" id="message" name="qty" rows="4" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:text-teal-400"></input>
            </div>
            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 rounded-md">Kirim</button>
        </form>
    </div>
</body>
</html>