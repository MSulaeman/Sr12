<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.12/dist/full.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="flex items-center justify-center ">
        <div class="relative mt-28 mx-auto">
            <div class="absolute inset-0 bg-teal-400 rounded-lg transform rotate-6 "></div>
            <div class="relative bg-white rounded-lg shadow-lg p-8 w-80 ">
                <form action="update.php" method="post" enctype="multipart/form-data">

                    <?php
                    include '../koneksi.php';
                    $id    = $_GET['id'];
                    $query = mysqli_query($conn, "SELECT * FROM produk WHERE id='$id'");
                    $produk = mysqli_fetch_array($query);
                    ?>

                    <h2 class="text-2xl font-bold mb-6">Update Data</h2>
                    <input type="hidden" name="id" value="<?= htmlspecialchars($produk['id']) ?>">

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">Nama Produk</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="nama" value="<?= htmlspecialchars($produk['nama']) ?>" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">Harga</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="harga" value="<?= htmlspecialchars($produk['harga']) ?>" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">Qty</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="qty" value="<?= htmlspecialchars($produk['qty']) ?>" required>
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                        <textarea name="deskripsi" class="textarea textarea-bordered mt-1 block w-full border border-gray-300 " placeholder="deskripsi"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-sm font-medium text-gray-700">Foto</label>
                        <input type="file" name="foto" value="<?= htmlspecialchars($produk['foto']) ?>" class="file-input file-input-bordered border border-gray-300 rounded-md max-w-xs" />
                    </div>
                    <button type="submit" class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>