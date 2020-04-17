<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title></title>
</head>

<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>

        <li class="breadcrumb-item">
            <a href="index.php?page=admin">Admin</a>
        </li>
        <li class="breadcrumb-item active">
            Edit Data
        </li>
    </ol>

    <!-- Icon Cards-->


    <!-- Area Chart Example-->
    <!-- <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Area Chart Example</div>
        <div class="card-body">
            <canvas id="myAreaChart" width="100%" height="30"></canvas>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div> -->

    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Admin</div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="index.php?page=admin" class="btn btn-primary mb-4">Kembali</a>
                <?php
                $dEdit = $_GET['id'];
                $ambil = $koneksi->query("SELECT * FROM tb_admin WHERE admin_id = '$dEdit'");
                $pecah = $ambil->fetch_assoc();
                ?>

                <form action="" method="POST" style="width: 50%">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input name="txt_username" style="width:50%" ;type="text" class="form-control" value="<?php echo $pecah['admin_username'] ?>">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input name="txt_password" style="width:50%" type="password" class="form-control" value=" <?php echo $pecah['admin_password'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
                            <input name="txt_nama" style="width:50%" type="text" class="form-control" value=" <?php echo $pecah['admin_nama'] ?>">
                        </div>
                        <button type="submit" class="btn btn-primary" name="edit">edit</button>

                    </form>

                    <?php
                    if (isset($_POST['edit'])) {
                        $txt_username = $_POST['txt_username'];
                        $txt_password = $_POST['txt_password'];
                        $txt_nama     = $_POST['txt_nama'];

                        $sql = $koneksi->query("UPDATE `tb_admin` SET  admin_username = '$txt_username',
                                                            admin_password = '$txt_password',
                                                            admin_nama     = '$txt_nama'
                                                            WHERE
                                                            admin_id = '$dEdit'");

                        if ($sql) {
                            echo "<script>
                            alert('Data Berhasil Di Edit');
                            window.location='index.php?page=admin';
                            </script>";
                        }
                    }

                    ?>

            </div>
        </div>

        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
</div>
</div>
</div>