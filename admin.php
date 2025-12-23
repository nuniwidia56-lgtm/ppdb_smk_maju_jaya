<?php
session_start();
include 'koneksi.php';

// Cek login
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

// Ambil data siswa dari database
$result = mysqli_query($conn, "SELECT * FROM siswa ORDER BY id_siswa DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin - PPDB SMK MAJU JAYA</title>
    <link rel="stylesheet" href="admin.css"> 
</head>
<body>
    <div class="header">
        <h2>Dashboard Admin - PPDB SMK Maju Jaya</h2>
        <a class="logout" href="logout.php">Logout</a>
    </div>

    <div class="container">
        <h3>📋 Daftar Siswa yang Sudah Mendaftar</h3>

        <table>
            <tr>
                <th>No</th>
                <th>NISN</th>
                <th>Nama Lengkap</th>
                <th>Jenis Kelamin</th>
                <th>Tempat, Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Asal Sekolah</th>
                <th>Jurusan</th>
                <th>No HP</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>

            <?php
            if (mysqli_num_rows($result) > 0) {
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                        <td>{$no}</td>
                        <td>{$row['nisn']}</td>
                        <td>{$row['nama_lengkap']}</td>
                        <td>{$row['jenis_kelamin']}</td>
                        <td>{$row['tempat_lahir']}, {$row['tanggal_lahir']}</td>
                        <td>{$row['alamat']}</td>
                        <td>{$row['asal_sekolah']}</td>
                        <td>{$row['jurusan']}</td>
                        <td>{$row['no_hp']}</td>
                        <td>{$row['email']}</td>
                        <td class='aksi'>
                            <a href='edit_siswa.php?id={$row['id_siswa']}' class='edit'>Edit</a>
                            <a href='hapus_siswa.php?id={$row['id_siswa']}' class='hapus' onclick='return confirm(\"Yakin ingin menghapus data ini?\")'>Hapus</a>
                        </td>
                    </tr>";
                    $no++;
                }
            } else {
                echo "<tr><td colspan='10' class='no-data'>Belum ada siswa yang mendaftar.</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
