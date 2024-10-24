<?php
include '../koneksi.php';

?>

<form action="update.php" method="post">

        <?php
            
            $id    = $_GET['id'];  
            $query = mysqli_query($conn,"SELECT * FROM produk WHERE id='$id'");
            $siswa = mysqli_fetch_array($query);
        ?>

    <h1>Update Data</h1>
    <input type="hidden" name="id" value="<?= htmlspecialchars($produk['id']) ?>">
    
    <label>Nama</label>
    <input type="text" name="nama" value="<?= htmlspecialchars($produk['nama']) ?>" required>
    
    <label>Harga</label>
    <input type="text" name="harga" value="<?= htmlspecialchars($produk['harga']) ?>" required>
    
    <label>Jumlah</label>
    <input type="number" name="qty" value="<?= htmlspecialchars($produk['qty']) ?>" required>
    
    <button type="submit">Update</button>
</form>
