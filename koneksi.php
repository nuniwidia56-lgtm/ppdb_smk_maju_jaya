<?php
$host = "localhost";
$user = "root"; // default user Laragon
$pass = ""; // kosongkan jika tidak ada password
$db   = "ppdb_smk_maju_jaya";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
