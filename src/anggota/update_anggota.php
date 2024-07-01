<?php

include '../../koneksi.php';
$id = $_POST['id'];
$tableName = 'anggota';

$nama = $_POST['nama'];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
$phone = $_POST['tlp'];

$query = "UPDATE $tableName SET nama='$nama', jenis_kelamin='$gender', alamat='$alamat', telp='$phone' where id=$id";

mysqli_query($koneksi, $query);

header("location:read_anggota.php");
