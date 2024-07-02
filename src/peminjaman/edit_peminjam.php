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

    <?php
    include "../../koneksi.php";
    $id = $_GET['id'];
    $tableName = 'peminjaman';
    $query_mysql = mysqli_query($koneksi, "SELECT * FROM $tableName WHERE id='$id'");
    while ($data = mysqli_fetch_array($query_mysql)) {
    ?>

      <form class="card-body" action="update_peminjam.php" method="POST">
        <h1>UPDATE PEMINJAM</h1>
        <div class="mb-3">
          <label for="pinjam" class="form-label">Tanggal Peminjaman</label>
          <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
          <input type="text" class="form-control" name="pinjam" value="<?php echo $data['tanggal_pinjam'] ?>">
        </div>
        <div class="mb-3">
          <label for="kembali" class="form-label">Tanggal Pengembalian</label>
          <input type="text" class="form-control" name="kembali" value="<?php echo $data['tanggal_kembali'] ?>">
        </div>
        <div class="mb-3">
          <label for="anggota" class="form-label">Anggota</label>
          <input type="text" class="form-control" name="anggota" value="<?php echo $data['anggota'] ?>">
        </div>
        <div class="mb-3">
          <label for="petugas" class="form-label">Petugas</label>
          <input type="text" class="form-control" name="petugas" value="<?php echo $data['petugas'] ?>">
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