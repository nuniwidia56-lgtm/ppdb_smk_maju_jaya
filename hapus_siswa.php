<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM siswa WHERE id_siswa='$id'");

header("Location: admin.php");
exit();
?>