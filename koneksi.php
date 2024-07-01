<?php

$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASS = "";
$DB_NAME = "perpustakaan";

$koneksi = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
// if ($koneksi) {
//   echo "Connection Success";
// }

// Check Connection
if (mysqli_connect_errno()) {
  echo "Connection Failed";
}
