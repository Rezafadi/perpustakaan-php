<?php

include '../../koneksi.php';
$id = $_POST['id'];
$tableName = 'peminjaman';

$pinjam = $_POST['pinjam'];
$kembali = $_POST['kembali'];
$anggota = $_POST['anggota'];
$petugas = $_POST['petugas'];

$query = "UPDATE $tableName SET tanggal_pinjam='$pinjam', tanggal_kembali='$kembali', anggota='$anggota', petugas='$petugas' where id=$id";

mysqli_query($koneksi, $query);

header("location:read_peminjam.php");
