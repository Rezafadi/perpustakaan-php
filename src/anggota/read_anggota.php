<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perpustakaan</title>
  <link rel="stylesheet" href="../../assets/css/dashboard.css">
  <link rel="stylesheet" href="../../assets/css/style-min.css">
</head>

<body>
  <br />
  <div class="container">
    <button class="btn-primary" style="border-radius: 10px;">
      <a href="create_anggota.php" style="color: white; text-decoration: none">Tambah Data</a>
    </button>
    <button class="btn-primary" style="border-radius: 10px;">
      <a href="../../dashboard.php" style="color: white; text-decoration: none">Dashboard</a>
    </button>
  </div>
  <br>
  <h1>
    <center>DATA ANGGOTA</center>
  </h1>
  <br />
  <br />
  <table class="table">
    <thead>
      <tr>
        <th scope="col" style="text-align: center;">NO</th>
        <th scope="col" style="text-align: center;">Nama</th>
        <th scope="col" style="text-align: center;">Jenis Kelamin</th>
        <th scope="col" style="text-align: center;">Alamat</th>
        <th scope="col" style="text-align: center;">Phone</th>
        <th scope="col" style="text-align: center;">OPSI</th>
      </tr>
    </thead>
    <?php
    include '../../koneksi.php';
    $tableName = 'anggota';
    $no = 1;
    $query = "select * from $tableName";
    $data = mysqli_query($koneksi, $query);
    while ($d = mysqli_fetch_array($data)) {
    ?>
      <tbody>
        <tr>
          <td scope="row"><?php echo $no++; ?></td>
          <td><?php echo $d['nama']; ?></td>
          <td><?php echo $d['jenis_kelamin']; ?></td>
          <td><?php echo $d['alamat']; ?></td>
          <td><?php echo $d['telp']; ?></td>
          <td>
            <a href="edit_anggota.php?id=<?php echo $d['id']; ?>">Edit</a>
            <a href="delete_anggota.php?id=<?php echo $d['id']; ?>">Delete</a>
          </td>
        </tr>
      </tbody>
    <?php
    }
    ?>
  </table>
  <script src="../../assets/js/bootstrap.js"></script>
</body>

</html>