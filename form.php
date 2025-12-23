<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'koneksi.php'; // pastikan file koneksi sudah benar

// Proses saat tombol daftar diklik
if (isset($_POST['submit'])) {
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama_lengkap'];
    $jk = $_POST['jenis_kelamin'];
    $tempat = $_POST['tempat_lahir'];
    $tanggal = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $asal = $_POST['asal_sekolah'];
    $jurusan = $_POST['jurusan'];
    $nohp = $_POST['no_hp'];
    $email = $_POST['email'];

    // Query simpan data ke tabel siswa
    $query = "INSERT INTO siswa (nisn, nama_lengkap, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat, asal_sekolah, jurusan, no_hp, email)
              VALUES ('$nisn', '$nama', '$jk', '$tempat', '$tanggal', '$alamat', '$asal', '$jurusan', '$nohp', '$email')";

    if (mysqli_query($conn, $query)) {
        // Redirect ke halaman sukses agar tidak ada re-submit
        header("Location: sukses.php");
        exit();
    } else {
        echo "<p style='color:red;'> Error: " . mysqli_error($conn) . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Formulir Pendaftaran Siswa Baru</title>
    <link rel="stylesheet" href="form.css"> 
</head>
<body>

<h2>Formulir Pendaftaran Siswa Baru</h2>

<form method="POST" action="">
    <label>NISN:</label>
    <input type="text" name="nisn" required>

    <label>Nama Lengkap:</label>
    <input type="text" name="nama_lengkap" required>

    <label>Jenis Kelamin:</label>
    <select name="jenis_kelamin" required>
        <option value="">--Pilih--</option>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>

    <label>Tempat Lahir:</label>
    <input type="text" name="tempat_lahir" required>

    <label>Tanggal Lahir:</label>
    <input type="date" name="tanggal_lahir" required>

    <label>Alamat:</label>
    <textarea name="alamat" rows="3" required></textarea>

    <label>Asal Sekolah:</label>
    <input type="text" name="asal_sekolah" required>
    
    <label>Jurusan:</label>
    <select name="jurusan" required>
        <option value="">--Pilih--</option>
        <option value="Teknik Komputer dan Jaringan (TKJ)">Teknik Komputer dan Jaringan (TKJ)</option>
        <option value="Rekayasa Perangkat Lunak (RPL)">Rekayasa Perangkat Lunak (RPL)</option>
        <option value="Teknik Kendaraan Ringan (TKR)">Teknik Kendaraan Ringan (TKR)</option>
        <option value="Akuntansi dan Keuangan Lembaga (AKL)">Akuntansi dan Keuangan Lembaga (AKL)</option>
        <option value="Otomatisasi dan Tata Kelola Perkantoran (OTKP)">Otomatisasi dan Tata Kelola Perkantoran (OTKP)</option>
    </select>
    <label>No. HP:</label>
    <input type="text" name="no_hp" required>

    <label>Email:</label>
    <input type="email" name="email" required>

    <button type="submit" name="submit">Daftar</button>
</form>

</body>
</html>
