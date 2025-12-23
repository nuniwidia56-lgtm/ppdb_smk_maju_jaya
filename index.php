<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PPDB 2025/2026 - SMK MAJU JAYA</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- ===== HEADER ===== -->
<header class="site-header">
  <div class="hero">
    <img src="asset/sekolah.jpg" alt="SMK Maju Jaya">
    <div class="overlay"></div>
    <div class="hero-text">
      <h1>SMK MAJU JAYA</h1>
      <p>PPDB 2025 / 2026</p>
    </div>
  </div>
</header>
  <!-- ===== NAVIGASI ===== -->
  <nav class="main-nav container">
    <a href="index.php">Beranda</a>
    <a href="form.php">Formulir Pendaftaran</a>
    <a href="hasil.php">Hasil Pendaftaran</a>
    <a href="admin_login.php">Login Admin</a>
  </nav>

  <!-- ===== KONTEN UTAMA ===== -->
  <main class="container">
    <section class="card">
      <h2>Selamat Datang</h2>
      <p>Selamat datang di laman resmi PPDB SMK MAJU JAYA. Silakan gunakan menu 
      <strong>Formulir Pendaftaran</strong> untuk mendaftar. Untuk panitia, gunakan menu 
      <strong>Login Admin</strong>.</p>

      <h3>Jurusan Tersedia</h3>
      <ul>
        <li>Teknik Komputer dan Jaringan (TKJ)</li>
        <li>Rekayasa Perangkat Lunak (RPL)</li>
        <li>Teknik Kendaraan Ringan (TKR)</li>
        <li>Akuntansi dan Keuangan Lembaga (AKL)</li>
        <li>Otomatisasi dan Tata Kelola Perkantoran (OTKP)</li>
      </ul>
    </section>
  </main>

<!-- ===== BERITA & PRESTASI ===== -->
    <section class="card berita">
      <h2>Berita & Prestasi SMK Maju Jaya</h2>

      <div class="news-grid">
        <article class="news-item">
          <h3>🏆 SMK Maju Jaya Juara 1 Lomba Inovasi Teknologi Nasional</h3>
          <p>Tim RPL SMK Maju Jaya berhasil meraih juara pertama dalam kompetisi <em>National Tech Innovation 2025</em> dengan proyek aplikasi berbasis IoT untuk efisiensi energi di lingkungan sekolah.</p>
        </article>

        <article class="news-item">
          <h3>🤖 Siswa SMK Maju Jaya Ciptakan Robot Pemilah Sampah Otomatis</h3>
          <p>Tim inovasi dari jurusan <strong>Teknik Elektronika Industri</strong> menciptakan robot pemilah sampah otomatis berbasis sensor warna dan IoT. Proyek ini menjadi finalis di ajang <em>National Smart Robotics Competition 2025</em>.</p>
        </article>

        <article class="news-item">
          <h3>🌍 Program Pertukaran Pelajar ke Jepang</h3>
          <p>Dua siswa jurusan <strong>Otomatisasi dan Tata Kelola Perkantoran (OTKP)</strong> terpilih mengikuti program pertukaran pelajar ke Jepang selama 3 bulan dalam rangka <em>Vocational School Exchange Program</em>.</p>
        </article>

        <article class="news-item">
          <h3>📱 Aplikasi PPDB Online Buatan Siswa Diluncurkan</h3>
          <p>Siswa jurusan <strong>Rekayasa Perangkat Lunak (RPL)</strong> sukses mengembangkan sistem <strong>PPDB Online</strong> berbasis web yang kini digunakan resmi oleh SMK Maju Jaya untuk proses pendaftaran siswa baru tahun 2025/2026.</p>
        </article>
      </div>
    </section>
  </main>
              
  <!-- ===== FOOTER ===== -->
  <footer class="site-footer">
    <div class="container">
      <p>&copy; SMK Maju Jaya - PPDB 2025/2026</p>
    </div>
  </footer>
</body>
</html>