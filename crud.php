<?php
// Koneksi ke database
$host = 'localhost';
$username = 'root';
$password = ''; // Sesuaikan dengan password database Anda
$database = 'user_management';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// CREATE
if (isset($_POST['create'])) {
    $id_kategori = $_POST['id_kategori'];
    $harga = $_POST['harga'];
    $nama = $_POST['nama'];
    $qty = $_POST['qty'];
    $deskripsi = $_POST['deskripsi'];
    $foto = $_POST['foto'];

    $sql = "INSERT INTO produk (id_kategori, harga, nama, qty, deskripsi, foto) VALUES (?, ?, ?, ?, ?, ?);";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ississ', $id_kategori, $harga, $nama, $qty, $deskripsi, $foto);

    if ($stmt->execute()) {
        echo "Produk berhasil ditambahkan.";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}

// READ
$sql = "SELECT produk.*, kategori.nama AS nama_kategori FROM produk INNER JOIN kategori ON produk.id_kategori = kategori.id_kategori;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p>Produk: " . $row['nama'] . " | Kategori: " . $row['nama_kategori'] . " | Harga: " . $row['harga'] . "</p>";
    }
} else {
    echo "Tidak ada data.";
}

// UPDATE
if (isset($_POST['update'])) {
    $id_produk = $_POST['id_produk'];
    $id_kategori = $_POST['id_kategori'];
    $harga = $_POST['harga'];
    $nama = $_POST['nama'];
    $qty = $_POST['qty'];
    $deskripsi = $_POST['deskripsi'];
    $foto = $_POST['foto'];

    $sql = "UPDATE produk SET id_kategori = ?, harga = ?, nama = ?, qty = ?, deskripsi = ?, foto = ? WHERE id_produk = ?;";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ississi', $id_kategori, $harga, $nama, $qty, $deskripsi, $foto, $id_produk);

    if ($stmt->execute()) {
        echo "Produk berhasil diperbarui.";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}

// DELETE
if (isset($_POST['delete'])) {
    $id_produk = $_POST['id_produk'];

    $sql = "DELETE FROM produk WHERE id_produk = ?;";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id_produk);

    if ($stmt->execute()) {
        echo "Produk berhasil dihapus.";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Produk</title>
</head>
<body>
    <h1>CRUD Produk</h1>

    <!-- Form Create -->
    <form method="POST">
        <h3>Tambah Produk</h3>
        <input type="number" name="id_kategori" placeholder="ID Kategori" required><br>
        <input type="text" name="harga" placeholder="Harga" required><br>
        <input type="text" name="nama" placeholder="Nama" required><br>
        <input type="number" name="qty" placeholder="Quantity" required><br>
        <textarea name="deskripsi" placeholder="Deskripsi" required></textarea><br>
        <input type="text" name="foto" placeholder="URL Foto" required><br>
        <button type="submit" name="create">Tambah</button>
    </form>

    <!-- Form Update -->
    <form method="POST">
        <h3>Update Produk</h3>
        <input type="number" name="id_produk" placeholder="ID Produk" required><br>
        <input type="number" name="id_kategori" placeholder="ID Kategori" required><br>
        <input type="text" name="harga" placeholder="Harga" required><br>
        <input type="text" name="nama" placeholder="Nama" required><br>
        <input type="number" name="qty" placeholder="Quantity" required><br>
        <textarea name="deskripsi" placeholder="Deskripsi" required></textarea><br>
        <input type="text" name="foto" placeholder="URL Foto" required><br>
        <button type="submit" name="update">Update</button>
    </form>

    <!-- Form Delete -->
    <form method="POST">
        <h3>Hapus Produk</h3>
        <input type="number" name="id_produk" placeholder="ID Produk" required><br>
        <button type="submit" name="delete">Hapus</button>
    </form>
</body>
</html>
