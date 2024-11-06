<?php
session_start();
include 'koneksi.php';
$query = mysqli_query($conn, "SELECT * FROM produk");

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

    <div class="">
        <?php
        $produk = mysqli_fetch_array($query)
        ?>
            <div class="card card-compact bg-base-100 w-60 shadow-xl hover:scale-105 ">
                <figure>
                    <img src="foto_produk/<?php echo $produk['foto'] ?>" alt="">
                </figure>
                <div class="card-body">
                    <h2 class="card-title"> <?php echo $produk['nama'] ?></h2>
                    <p> <?php echo $produk['deskripsi'] ?></p>
                    
                </div>
            </div>
        
    </div>



    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>