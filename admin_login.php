<?php
session_start();
include 'koneksi.php';

// Jika sudah login, langsung ke halaman admin
if (isset($_SESSION['admin'])) {
    header("Location: admin.php");
    exit();
}

// Proses login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // gunakan MD5 agar sesuai database

    $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['admin'] = $username;
        header("Location: admin.php");
        exit();
    } else {
        $error = "❌ Login gagal! Username atau password salah.";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Admin PPDB SMK Maju Jaya</title>
    <link rel="stylesheet" href="style.css"> 
    <!-- Panggil file CSS eksternal -->
    <link rel="stylesheet" href="admin_login.css">
</head>
<body>
    <div class="login-box">
        <h2>Login Admin</h2>

        <?php if (!empty($error)) echo "<div class='error'>$error</div>"; ?>

        <form method="POST" action="">
            <label>Username</label>
            <input type="text" name="username" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <button type="submit" name="login">Login</button>
        </form>
    </div>
</body>
</html>
