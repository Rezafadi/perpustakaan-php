<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perpustakaan</title>
  <link rel="stylesheet" href="../../assets/css/style-min.css">
  <link rel="stylesheet" href="../../assets/css/dashboard.css">
</head>

<body>
  <br />
  <div>
    <button class="btn-primary mx-3">
      <a href="read_pengarang.php" style="color: white; text-decoration: none">Kembali</a>
    </button>
  </div>
  <div class="card" style="width: 30rem; margin: 0 auto; margin-top: 3rem;">
    <form class="card-body" method="POST" action="">
      <h1>Daftar Pengarang</h1>
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" required>
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat" rows="3"></textarea>
      </div>
      <div class="mb-3">
        <label for="telp" class="form-label">Telepon</label>
        <input type="text" class="form-control" name="telp">
      </div>
      <div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>

  <?php
  require_once '../../koneksi.php';

  $tableName = "pengarang";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];

    $query = "INSERT INTO $tableName VALUES ('0', '$nama' , '$alamat', '$telp')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
      header("Location: read_pengarang.php");
    }
  }
  ?>

  ?>

  <script src="assets/js/bootstrap.js"></script>
</body>

</html>