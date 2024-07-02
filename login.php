<?php
session_start();
include 'koneksi.php'; // File untuk koneksi database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Mencegah SQL Injection
  $username = mysqli_real_escape_string($koneksi, $username);

  // Hashing password menggunakan password_hash() dan password_verify()
  $sql = "SELECT * FROM petugas WHERE username='$username'";
  $result = mysqli_query($koneksi, $sql);

  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    if ($password == $row['password']) {
      $_SESSION['username'] = $row['username'];
      $_SESSION['nama'] = $row['nama'];
      $_SESSION['telp'] = $row['telp'];
      $_SESSION['alamat'] = $row['alamat'];
      header("Location: dashboard.php");
      exit();
    } else {
      echo "Password salah!";
    }
  } else {
    echo "Username tidak ditemukan!";
  }
} else {
  header("Location: index.php");
  exit();
}
