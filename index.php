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
    <form class="card-body" method="POST" action="login.php">
      <h1>Login Petugas</h1>
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <div>
        <button type="submit" class="btn btn-primary">Login</button>
        <button class="btn btn-primary">
          <a href="register.php" style="color: white; text-decoration: none;">Daftar</a>
        </button>
      </div>
    </form>
  </div>

  <script src="assets/js/bootstrap.js"></script>
</body>

</html>