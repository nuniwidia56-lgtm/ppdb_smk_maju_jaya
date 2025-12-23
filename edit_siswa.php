<?php
session_start();
include 'koneksi.php';

// Cek login
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

// Ambil data siswa berdasarkan ID
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM siswa WHERE id_siswa='$id'");
$data = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama_lengkap'];
    $jk = $_POST['jenis_kelamin'];
    $tempat = $_POST['tempat_lahir'];
    $tanggal = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $asal = $_POST['asal_sekolah'];
    $nohp = $_POST['no_hp'];
    $email = $_POST['email'];

    $update = mysqli_query($conn, "UPDATE siswa SET 
        nisn='$nisn', 
        nama_lengkap='$nama',
        jenis_kelamin='$jk',
        tempat_lahir='$tempat',
        tanggal_lahir='$tanggal',
        alamat='$alamat',
        asal_sekolah='$asal',
        no_hp='$nohp',
        email='$email'
        WHERE id_siswa='$id'");

    if ($update) {
        header("Location: admin.php");
        exit();
    } else {
        echo "Gagal memperbarui data: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Siswa</title>
    <link rel="stylesheet" href="form.css"> 
</head>
<body>
    <h2>Edit Data Siswa</h2>
    <form method="POST">
        <label>NISN:</label><br>
        <input type="text" name="nisn" value="<?= $data['nisn']; ?>" required><br>

        <label>Nama Lengkap:</label><br>
        <input type="text" name="nama_lengkap" value="<?= $data['nama_lengkap']; ?>" required><br>

        <label>Jenis Kelamin:</label><br>
        <select name="jenis_kelamin">
            <option value="Laki-laki" <?= $data['jenis_kelamin']=='Laki-laki'?'selected':''; ?>>Laki-laki</option>
            <option value="Perempuan" <?= $data['jenis_kelamin']=='Perempuan'?'selected':''; ?>>Perempuan</option>
        </select><br>

        <label>Tempat Lahir:</label><br>
        <input type="text" name="tempat_lahir" value="<?= $data['tempat_lahir']; ?>"><br>

        <label>Tanggal Lahir:</label><br>
        <input type="date" name="tanggal_lahir" value="<?= $data['tanggal_lahir']; ?>"><br>

        <label>Alamat:</label><br>
        <textarea name="alamat"><?= $data['alamat']; ?></textarea><br>

        <label>Asal Sekolah:</label><br>
        <input type="text" name="asal_sekolah" value="<?= $data['asal_sekolah']; ?>"><br>

        <label>No HP:</label><br>
        <input type="text" name="no_hp" value="<?= $data['no_hp']; ?>"><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="<?= $data['email']; ?>"><br><br>

        <button type="submit" name="update">Simpan Perubahan</button>
    
    </form>
</body>
</html>
