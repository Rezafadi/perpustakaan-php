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
      <a href="read_peminjam.php" style="color: white; text-decoration: none">Kembali</a>
    </button>
  </div>
  <div class="card" style="width: 30rem; margin: 0 auto; margin-top: 3rem;">
    <form class="card-body" method="POST" action="">
      <h1>Daftar Peminjaman</h1>
      <div class="mb-3">
        <label for="pinjam" class="form-label">Tanggal Peminjaman</label>
        <input type="date" class="form-control" name="pinjam" required>
      </div>
      <div class="mb-3">
        <label for="kembali" class="form-label">Tanggal Pengembalian</label>
        <input type="date" class="form-control" name="kembali" required>
      </div>
      <div class="mb-3">
        <label for="anggota" class="form-label">Anggota</label>
        <input type="text" class="form-control" name="anggota">
      </div>
      <div class="mb-3">
        <label for="petugas" class="form-label">Petugas</label>
        <input type="text" class="form-control" name="petugas">
      </div>
      <div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>

  <?php
  require_once '../../koneksi.php';

  $tableName = "peminjaman";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pinjam = $_POST['pinjam'];
    $kembali = $_POST['kembali'];
    $anggota = $_POST['anggota'];
    $petugas = $_POST['petugas'];

    $query = "INSERT INTO $tableName VALUES ('0', '$pinjam' , '$kembali', '$anggota', '$petugas')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
      header("Location: read_peminjam.php");
    }
  }
  ?>


  <script src="assets/js/bootstrap.js"></script>
</body>

</html>