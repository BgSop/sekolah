<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>
  <?php include 'partials/head.php' ?>

  <!-- Custom fonts for this template-->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form method="POST">
          <div class="form-group">
            <div class="form-label-group">
              <input name="username" type="text" id="inputEmail" class="form-control" required="required" autofocus="autofocus">
              <labe>Username</labe>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input name="password" type="password" id="inputPassword" class="form-control" required="required">
              <labe>Password</labe>
            </div>
          </div>

          <button class="btn btn-primary btn-block" name="login">Login</button>
        </form>
        <?php
        if (isset($_POST['login'])) {
          $username = $_POST['username'];
          $password = $_POST['password'];

          include 'conn.php';

          $cek = $koneksi->query("SELECT * FROM tb_admin WHERE admin_username = '$username' AND admin_password = '$password'");

          $validasi = $cek->num_rows;
          $pecah = $cek->fetch_assoc();

          if ($validasi >= 1) {
            session_start();

            $_SESSION['admin'] = $pecah;
            echo "
            <script>
            alert('Anda Berhasil Login')
            window.location='index.php';
            </script>";
          }
        }
        ?>
      </div>
    </div>
  </div> <?php include 'partials/scripts.php' ?>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>