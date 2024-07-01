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

    <?php
    include "../../koneksi.php";
    $id = $_GET['id'];
    $tableName = 'anggota';
    $query_mysql = mysqli_query($koneksi, "SELECT * FROM $tableName WHERE id='$id'");
    while ($data = mysqli_fetch_array($query_mysql)) {
    ?>

      <form class="card-body" action="update_anggota.php" method="POST">
        <h1>UPDATE Anggota</h1>
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
          <input type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>">
        </div>
        <div class="mb-3">
          <label for="gender" class="form-label">Jenis Kelamin</label>
          <select name="gender" id="inputGroupSelect01" class="form-select">
            <option selected value="<?php echo $data['jenis_kelamin'] ?>"><?php echo $data['jenis_kelamin'] ?></option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="tlp" class="form-label">No Telepon</label>
          <input type="text" class="form-control" name="tlp" value="<?php echo $data['telp'] ?>">
        </div>
        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <textarea class="form-control" name="alamat" rows="3" value="<?php echo $data['alamat'] ?>"></textarea>
        </div>
        <div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
  </div>
<?php } ?>

<script src="assets/js/bootstrap.js"></script>
</body>

</html>