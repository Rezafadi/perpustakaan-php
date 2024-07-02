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

    <?php
    include "../../koneksi.php";
    $id = $_GET['id'];
    $tableName = 'rak';
    $query_mysql = mysqli_query($koneksi, "SELECT * FROM $tableName WHERE id='$id'");
    while ($data = mysqli_fetch_array($query_mysql)) {
    ?>

      <form class="card-body" action="update_rak.php" method="POST">
        <h1>UPDATE RAK</h1>
        <div class="mb-3">
          <label for="kodeRak" class="form-label">Kode Rak</label>
          <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
          <input type="text" class="form-control" name="kodeRak" value="<?php echo $data['kode_rak'] ?>">
        </div>
        <div class="mb-3">
          <label for="lokasi" class="form-label">Lokasi</label>
          <input type="text" class="form-control" name="lokasi" value="<?php echo $data['lokasi'] ?>">
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