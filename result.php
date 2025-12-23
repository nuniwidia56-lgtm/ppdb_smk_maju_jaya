<?php
include 'koneksi.php'();
// simple sanitization
function esc($s){ return htmlspecialchars(trim($s)); }

$data = [
  'nama'=>esc($_POST['nama'] ?? ''),
  'nisn'=>esc($_POST['nisn'] ?? ''),
  'asal_sekolah'=>esc($_POST['asal_sekolah'] ?? ''),
  'hp'=>esc($_POST['hp'] ?? ''),
  'jurusan'=>esc($_POST['jurusan'] ?? ''),
  'keterangan'=>esc($_POST['keterangan'] ?? ''),
  'waktu'=>date('Y-m-d H:i:s')
];

// save to JSON file (append)
$dir = __DIR__ . '/data';
if(!is_dir($dir)) mkdir($dir, 0755, true);
$file = $dir . '/submissions.json';
$all = [];
if(file_exists($file)){
  $content = file_get_contents($file);
  $all = json_decode($content, true) ?: [];
}
$all[] = $data;
file_put_contents($file, json_encode($all, JSON_PRETTY_PRINT));

?>
<!DOCTYPE html>
<html lang="id">
<head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Terima Kasih - PPDB</title><link rel="stylesheet" href="style.css"></head>
<body>
<header class="site-header"><div class="container"><h1>PPDB SMK MAJU JAYA</h1></div></header>
<nav class="main-nav container"><a href="index.php">Beranda</a><a href="form.php">Formulir Pendaftaran</a><a href="hasil.php">Hasil Pendaftaran</a><a href="admin_login.php">Login Admin</a></nav>
<main class="container">
  <section class="card">
    <h2>Terima Kasih</h2>
    <p>Data pendaftaran Anda telah diterima dan disimpan (lokal).</p>
    <h3>Rincian Pendaftaran</h3>
    <table>
      <tr><th>Nama</th><td><?php echo $data['nama']; ?></td></tr>
      <tr><th>NISN</th><td><?php echo $data['nisn']; ?></td></tr>
      <tr><th>Asal Sekolah</th><td><?php echo $data['asal_sekolah']; ?></td></tr>
      <tr><th>No HP</th><td><?php echo $data['hp']; ?></td></tr>
      <tr><th>Jurusan</th><td><?php echo $data['jurusan']; ?></td></tr>
      <tr><th>Keterangan</th><td><?php echo $data['keterangan']; ?></td></tr>
      <tr><th>Waktu</th><td><?php echo $data['waktu']; ?></td></tr>
    </table>
    <p class="note">Untuk melihat seluruh pendaftar, silakan <a href="admin_login.php">login sebagai admin</a>.</p>
  </section>
</main>
<footer class="site-footer"><div class="container"><p>&copy; SMK Maju Jaya - PPDB 2025/2026</p></div></footer>
</body>
</html>
