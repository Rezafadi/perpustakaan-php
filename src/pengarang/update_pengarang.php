<?php

include '../../koneksi.php';
$id = $_POST['id'];
$tableName = 'pengarang';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];

$query = "UPDATE $tableName SET nama='$nama', alamat='$alamat', telp='$telp' where id=$id";

mysqli_query($koneksi, $query);

header("location:read_pengarang.php");
