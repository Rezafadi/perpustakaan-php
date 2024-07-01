<?php

include '../../koneksi.php';
$id = $_POST['id'];
$tableName = 'buku';

$judul = $_POST['judul'];
$tahunTerbit = $_POST['tahunTerbit'];
$jml = $_POST['jumlah'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$kodeRak = $_POST['kodeRak'];

$query = "UPDATE $tableName SET judul='$judul', tahun_terbit='$tahunTerbit', jumlah='$jml', pengarang='$pengarang', penerbit='$penerbit', kode_rak='$kodeRak' where id=$id";

mysqli_query($koneksi, $query);

header("location:read_buku.php");
