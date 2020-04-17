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
            <a href="index.php?page=kategori">Kategori</a>
        </li>
        <li class="breadcrumb-item active">
            Edit Data Kategori
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
            Data Table Kategori</div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="index.php?page=kategori" class="btn btn-primary mb-4">Kembali</a>
                <?php
                $dEdit = $_GET['id'];
                $ambil = $koneksi->query("SELECT * FROM tb_kategori WHERE kategori_id = '$dEdit'");
                $pecah = $ambil->fetch_assoc();
                ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <form action="" method="POST" style="width: 50%">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Kategori</label>
                                <input name="txt_namakategori" style="width:50%" ;type="text" class="form-control" value="<?php echo $pecah['kategori_nama'] ?>">

                            </div>

                            <button type="submit" class="btn btn-primary" name="edit">edit</button>

                        </form>

                        <?php
                        if (isset($_POST['edit'])) {
                            $txt_namakategori = $_POST['txt_namakategori'];
                            $sql = $koneksi->query("UPDATE `tb_kategori` SET  kategori_nama = '$txt_namakategori'
                                                            WHERE
                                                            kategori_id = '$dEdit'");

                            if ($sql) {
                                echo "<script>
                            alert('Data Berhasil Di Edit');
                            window.location='index.php?page=kategori';
                            </script>";
                            }
                        }

                        ?>

            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
    </div>
</div>
</div>