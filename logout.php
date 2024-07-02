<?php
session_start();

// Menghapus semua sesi
session_unset();

// Menghancurkan sesi
session_destroy();

// Mengarahkan pengguna kembali ke halaman login
header("Location: index.php");
exit();
