<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];  // Simpan password tanpa hashing

    // Cek apakah username sudah ada
    $sql = "SELECT id FROM user WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        echo "Username sudah ada, pilih username lain.";
    } else {
        // Insert data user baru tanpa hashing password
        $sql = "INSERT INTO user (username, password) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ss', $username, $password);

        if ($stmt->execute()) {
            header('location:login.php');
            exit();
        } else {
            echo "Terjadi kesalahan.";
        }
    }

    $stmt->close();
    $conn->close();
}
?>


<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.12/dist/full.min.css" rel="stylesheet" type="text/css" />
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="relative">
        <div class="absolute inset-0 bg-teal-400 rounded-lg transform rotate-6"></div>
        <div class="relative bg-white rounded-lg shadow-lg p-8 w-80">
            <h2 class="text-2xl font-bold mb-6">Daftar Akun</h2>
            <form method="POST" action="daftar.php">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">Username</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nama" type="text" name="username" placeholder="Username">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" name="password" placeholder="Password">
                </div>
                <div class="flex items-center justify-between">
                    <button id="btn" class="bg-teal-400 hover:bg-teal-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Daftar</button>
                </div>
            </form>
            
        </div>
    </div>

    
</body>
</html>
