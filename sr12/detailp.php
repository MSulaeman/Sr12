<?php
session_start();
include 'koneksi.php';
$id    = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM produk where id=$id");

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

<body>

    <div class="container mx-auto my-14 flex gap-10">
        <?php
        $produk = mysqli_fetch_array($query)
        ?>
            <div class="card card-compact bg-base-100 w-60 shadow-xl hover:scale-105 ">
                <figure>
                    <img src="foto_produk/<?php echo $produk['foto'] ?>" alt="">
                </figure>
            </div>
    </div>



    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>