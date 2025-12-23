<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Hasil Pendaftaran - PPDB</title>
  <link rel="stylesheet" href="hasil.css">
</head>
<body>

<header class="site-header">
  <div class="container"><h1>PPDB SMK MAJU JAYA</h1></div>
</header>

<nav class="main-nav container">
  <a href="index.php">Beranda</a>
  <a href="form.php">Formulir Pendaftaran</a>
  <a href="hasil.php">Hasil Pendaftaran</a>
  <a href="admin_login.php">Login Admin</a>
</nav>

<main class="container">
  <section class="card">
    <h2>Data Pendaftar</h2>

    <?php
    $query = "SELECT * FROM siswa ORDER BY id_siswa DESC";
    $result = mysqli_query($conn, $query);
  
    if (!$result) {
    die("<b>Query Error:</b> " . mysqli_error($conn));
    }

    if(mysqli_num_rows($result) == 0){
      echo '<div class="alert">Belum ada pendaftar.</div>';
    } else {
      echo '<table>
            <tr>
              <th>No</th>
              <th>NISN</th>
              <th>Nama Lengkap</th>
              <th>Jenis Kelamin</th>
              <th>Tempat Lahir</th>
              <th>Tanggal Lahir</th>
              <th>Alamat</th>
              <th>Asal Sekolah</th>
              <th>Jurusan</th>
              <th>No HP</th>
              <th>Email</th>
            </tr>';

      $no = 1;
      while($row = mysqli_fetch_assoc($result)) {
        echo '<tr>
                <td>'.$no++.'</td>
                <td>'.htmlspecialchars($row['nisn']).'</td>
                <td>'.htmlspecialchars($row['nama_lengkap']).'</td>
                <td>'.htmlspecialchars($row['jenis_kelamin']).'</td>
                <td>'.htmlspecialchars($row['tempat_lahir']).'</td>
                <td>'.htmlspecialchars($row['tanggal_lahir']).'</td>
                <td>'.htmlspecialchars($row['alamat']).'</td>
                <td>'.htmlspecialchars($row['asal_sekolah']).'</td>
                <td>'.htmlspecialchars($row['jurusan']).'</td>
                <td>'.htmlspecialchars($row['no_hp']).'</td>
                <td>'.htmlspecialchars($row['email']).'</td>
              </tr>';
      }
      echo '</table>';
    }
    ?>

  </section>
</main>

<footer class="site-footer">
  <div class="container"><p>&copy; SMK Maju Jaya - PPDB 2025/2026</p></div>
</footer>

</body>
</html>
