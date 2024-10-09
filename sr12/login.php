<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Ambil data user berdasarkan username
    $sql = "SELECT id, password FROM user WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $db_password);

    if ($stmt->num_rows > 0) {
        $stmt->fetch();
        // Verifikasi password (tanpa hashing, perbandingan langsung)
        if ($password === $db_password) {
            header('Location: home.php');
            exit();
        } else {
            echo "Password salah!";
        }
    } else {
        echo "Username tidak ditemukan!";
    }

    $stmt->close();
    $conn->close();
}
?>









<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.12/dist/full.min.css" rel="stylesheet" type="text/css" />
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="relative">
        <div class="absolute inset-0 bg-teal-400 rounded-lg transform rotate-6"></div>
        <div class="relative bg-white rounded-lg shadow-lg p-8 w-80">
            <h2 class="text-2xl font-bold mb-6">Login</h2>
            <form method="POST" action="login.php">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Username</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="username" placeholder="Username" required>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="password" name="password" placeholder="Password" required>
                </div>
                <div class="flex items-center justify-center">
                    <button class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                            Login
                    </button>
                </div>
                <div>
                    <a class="flex items-center justify-center font-serif text-cyan-500" href="daftar.php">Don't have account?Sign Up</a>
                </div>
            </form>
            
        </div>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>