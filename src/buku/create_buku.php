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
      <a href="read_buku.php" style="color: white; text-decoration: none">Kembali</a>
    </button>
  </div>
  <div class="card" style="width: 30rem; margin: 0 auto; margin-top: 3rem;">
    <form class="card-body" method="POST" action="">
      <h1>Daftar Buku</h1>
      <div class="mb-3">
        <label for="judul" class="form-label">Judul</label>
        <input type="text" class="form-control" name="judul" required>
      </div>
      <div class="mb-3">
        <label for="tahunTerbit" class="form-label">Tahun Terbit</label>
        <input type="text" class="form-control" name="tahunTerbit" required>
      </div>
      <div class="mb-3">
        <label for="jml" class="form-label">Jumlah</label>
        <input type="text" class="form-control" name="jml" required>
      </div>
      <div class="mb-3">
        <label for="pengarang" class="form-label">Pengarang</label>
        <input type="text" class="form-control" name="pengarang" required>
      </div>
      <div class="mb-3">
        <label for="penerbit" class="form-label">Penerbit</label>
        <input type="text" class="form-control" name="penerbit" required>
      </div>
      <div class="mb-3">
        <label for="kodeRak" class="form-label">Kode Rak</label>
        <input type="text" class="form-control" name="kodeRak" required>
      </div>
      <div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>

  <?php
  require_once '../../koneksi.php';

  $tableName = "buku";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST['judul'];
    $tahunTerbit = $_POST['tahunTerbit'];
    $jml = $_POST['jml'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $kodeRak = $_POST['kodeRak'];

    $query = "INSERT INTO $tableName VALUES ('0', '$judul' , '$tahunTerbit', '$jml', '$pengarang', '$penerbit', '$kodeRak')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
      header("Location: read_buku.php");
    }
  }
  ?>

  ?>

  <script src="assets/js/bootstrap.js"></script>
</body>

</html>