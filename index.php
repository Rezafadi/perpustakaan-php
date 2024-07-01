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
    <form class="card-body">
      <h1>Login Petugas</h1>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div>
        <button type="submit" class="btn btn-primary">Login</button>
        <button class="btn btn-primary">
          <a href="register.php" style="color: white; text-decoration: none;">
            Daftar
          </a>
        </button>
      </div>
    </form>
  </div>

  <script src="assets/js/bootstrap.js"></script>
</body>

</html>