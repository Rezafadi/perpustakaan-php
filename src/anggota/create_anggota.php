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
      <a href="read_anggota.php" style="color: white; text-decoration: none">Kembali</a>
    </button>
  </div>
  <div class="card" style="width: 30rem; margin: 0 auto; margin-top: 3rem;">
    <form class="card-body" method="POST">
      <h1>Daftar Anggota</h1>
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama">
      </div>
      <div class="mb-3">
        <label for="gender" class="form-label">Jenis Kelamin</label>
        <select name="gender" id="inputGroupSelect01" class="form-select">
          <option selected>Choose...</option>
          <option value="Laki-laki">Laki-laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
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
  require_once '../../koneksi.php';

  $tableName = "anggota";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $phone = $_POST['tlp'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO $tableName VALUES ('', '$nama' , '$gender', '$alamat', '$phone')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
      header("Location: read_anggota.php");
    }
  }
  ?>

  <script src="assets/js/bootstrap.js"></script>
</body>

</html>