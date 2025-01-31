<?php
session_start();
// mengecek apakah ada data login
if (isset($_POST['login'])) {

    include('koneksi.php');

    // mendapatkan data
    $username = $_POST['username'];
    $password = $_POST['password'];


    // Ambil data user berdasarkan username
    $query = mysqli_query($conn, "SELECT * FROM user where username='$username'");

    // verifikasi data
    $jumlah_data = mysqli_num_rows($query);

    if ($jumlah_data > 0) {
        $data = mysqli_fetch_array($query);

        if (password_verify($password, $data['password'])) {
            // Simpan informasi ke session
            $_SESSION['id'] = $data['id'];
            $_SESSION['username'] = $data['username'];
            $_SESSION['role'] = $data['role']; // Menyimpan role pengguna

            if ($data['role'] === 'admin') { //verifikasi admin atau user
                header('Location: Admin/admin.php');
            } else {
                header('Location: home.php');
            }
        } else {
            header('Location: login.php?eror=Username atau password salah');
        }
    } else {
        header('Location: login.php?eror=Username atau password salah');
    }
}
?>









<html>

<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.12/dist/full.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="bg-gray-100 ">
    <!-- NAVBAR -->
    <!-- <nav class="navbar bg-base-100  bg-transparent shadow-md">
        <div class="flex-1 text-teal-400 bg-red italic font-mono font-bold">
            <p class="text-4xl mx-auto">SR12<span class="text-xl">Lite</span></p>
        </div>
    </nav> -->
    <!-- NAVBAR END -->

    <div class="flex items-center justify-center ">
        <div class="relative mt-28 mx-auto">
            <div class="absolute inset-0 bg-teal-400 rounded-lg transform rotate-6"></div>
            <div class="relative bg-white rounded-lg shadow-lg p-8 w-80">
                <h2 class="text-2xl font-bold mb-6">Login</h2>
                <?php
                if (isset($_GET['eror'])) : ?>
                    <div role="alert" class="rounded border-s-4 border-red-500 bg-red-50 p-4">
                        <span class="block font-medium text-red-800"><?= $_GET['eror'] ?></span>
                    </div>
                <?php endif ?>
                <form method="POST" action="login.php">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Username</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="username" placeholder="Username" required>
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="items-center justify-center">
                        <button class="bg-teal-500 w-64 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" name="login" value="login" type="submit">
                            Login
                        </button>
                    </div>
                    <div class="mt-2">
                        <a class="items-center justify-center font-serif text-cyan-400 " href="daftar.php">Don't have account?Sign Up</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>