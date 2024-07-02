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
      <a href="read_rak.php" style="color: white; text-decoration: none">Kembali</a>
    </button>
  </div>
  <div class="card" style="width: 30rem; margin: 0 auto; margin-top: 3rem;">
    <form class="card-body" method="POST" action="">
      <h1>Tambah Rak</h1>
      <div class="mb-3">
        <label for="kodeRak" class="form-label">Kode Rak</label>
        <input type="text" class="form-control" name="kodeRak" required>
      </div>
      <div class="mb-3">
        <label for="lokasi" class="form-label">Lokasi</label>
        <textarea class="form-control" name="lokasi" rows="3"></textarea>
      </div>
      <div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>

  <?php
  require_once '../../koneksi.php';

  $tableName = "rak";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kodeRak = $_POST['kodeRak'];
    $lokasi = $_POST['lokasi'];

    $query = "INSERT INTO $tableName VALUES ('', '$kodeRak' , '$lokasi')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
      header("Location: read_rak.php");
    }
  }
  ?>

  ?>

  <script src="assets/js/bootstrap.js"></script>
</body>

</html>