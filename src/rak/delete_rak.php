
<?php
// koneksi database
include '../../koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];

$tableName = 'rak';

// menghapus data dari database
mysqli_query($koneksi, "delete from $tableName where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:read_rak.php");

?>