<?php
session_start();
if (empty($_SESSION['admin'])) {
  echo "<script>
alert('Anda Harus Login');
window.location='login.php';
</script>";
}
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Berita Mediatama</title>
  <?php include 'partials/head.php' ?>
</head>

<body id="page-top">

  <?php include 'partials/top-bar.php' ?>

  <div id="wrapper">

    <!-- Sidebar -->
    <?php include 'partials/side-bar.php' ?>

    <div id="content-wrapper">

      <!-- /.container-fluid -->
      <?php include 'content.php' ?>

      <!-- Sticky Footer -->
      <?php include 'partials/footer.php' ?>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?php include 'partials/modal.php' ?>

  <?php include 'partials/scripts.php' ?>



</body>

</html>