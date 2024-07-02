<?php

include '../../koneksi.php';
$tableName = 'rak';
$id = $_POST['id'];

$kodeRak = $_POST['kodeRak'];
$lokasi = $_POST['lokasi'];

$query = "UPDATE $tableName SET kode_rak='$kodeRak', lokasi='$lokasi' where id=$id";

mysqli_query($koneksi, $query);

header("location:read_rak.php");
