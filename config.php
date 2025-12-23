<?php
$koneksi = mysqli_connect("localhost", "root", "", "ppdb_smk_maju_jaya");

if (mysqli_connect_errno()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
