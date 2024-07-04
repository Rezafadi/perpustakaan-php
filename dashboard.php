<?php
session_start(); // Memulai sesi

// Jika pengguna belum login, arahkan ke halaman login
if (!isset($_SESSION['username'])) {
  header("Location: index.php");
  exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perpustakaan</title>
  <link rel="stylesheet" href="assets/css/dashboard.css">
</head>

<body style="background-image: url('assets/image/background2.jpg'); background-size: cover; background-position: center;">
  <div style="width: 30rem; background-color: yellow; height: 15rem; padding: 10px; margin-left: 20px; margin-top: 20px;">
    <h2>Selamat Datang Petugas</h2>
    <h4>Nama : <?php echo $_SESSION['nama']; ?></h4>
    <h4>Username : <?php echo $_SESSION['username']; ?></h4>
    <h4>Telp : <?php echo $_SESSION['telp']; ?></h4>
    <h4>Alamat : <?php echo $_SESSION['alamat']; ?></h4>
  </div>
  <div class="btn" style="
    display: flex;
    flex-direction: column;
    gap: 20px;
    justify-content: center;
    align-items: center;
    margin-top: 5vh;
    padding-bottom: 5vh;
    ">
    <p style="color: white; font-size: 50px; font-weight: bolder;">PERPUSTAKAAN</p>
    <button class="btn">
      <a href="src/anggota/read_anggota.php">Anggota</a>
    </button>
    <button class="btn">
      <a href="src/buku/read_buku.php">Buku</a>
    </button>
    <button class="btn">
      <a href="src/peminjaman/read_peminjam.php">Peminjam</a>
    </button>
    <button class="btn">
      <a href="src/penerbit/read_penerbit.php">Penerbit</a>
    </button>
    <button class="btn">
      <a href="src/pengarang/read_pengarang.php">Pengarang</a>
    </button>
    <button class="btn">
      <a href="src/rak/read_rak.php">Rak</a>
    </button>
    <button class="btn">
      <a href="logout.php" style="color: black; text-decoration: none;">Logout</a>
    </button>
  </div>

</body>

</html>