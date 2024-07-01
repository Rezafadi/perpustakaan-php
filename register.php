<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perpustakaan</title>
  <link rel="stylesheet" href="assets/css/style-min.css">
</head>

<body>
  <div class="card" style="width: 18rem; margin: 0 auto; margin-top: 8rem;">
    <form class="card-body" method="POST">
      <h1>Daftar Petugas</h1>
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" name="username">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
      </div>
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama">
      </div>
      <div class="mb-3">
        <label for="tlp" class="form-label">No Telepon</label>
        <input type="text" class="form-control" name="tlp">
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat" rows="3"></textarea>
      </div>
      <div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>

  <?php
  require_once 'koneksi.php';

  $tableName = "petugas";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $phone = $_POST['tlp'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO $tableName VALUES ('', '$username', '$password', '$nama', '$phone', '$alamat')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
      header("Location: index.php");
    }
  }
  ?>

  <script src="assets/js/bootstrap.js"></script>
</body>

</html>