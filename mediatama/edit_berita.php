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
            <a href="index.php?page=berita">Berita</a>
        </li>
        <li class="breadcrumb-item active">
            Edit Data Berita
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
            Data Table Berita</div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="index.php?page=berita" class="btn btn-primary mb-4">Kembali</a>
                <?php
                $dEdit = $_GET['id'];
                $ambil = $koneksi->query("SELECT * FROM tb_berita WHERE berita_id = '$dEdit'");
                $pecah = $ambil->fetch_assoc();
                ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <form action="" method="POST" style="width: 50%">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Judul Berita</label>
                                <input name="txt_judulberita" style="width:50%" ;type="text" class="form-control" value="<?php echo $pecah['berita_judul'] ?>">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tanggal Berita</label>
                                <input name="txt_beritatgl" style="width:50%" type="text" class="form-control" value=" <?php echo $pecah['berita_tgl'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Isi Berita</label>
                                <input name="txt_beritaisi" style="width:50%" type="text" class="form-control" value=" <?php echo $pecah['berita_isi'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Berita Gambar</label>
                                <input name="txt_beritagambar" style="width:50%" type="text" class="form-control" value=" <?php echo $pecah['berita_gambar'] ?>">
                            </div>
                            <button type="submit" class="btn btn-primary" name="edit">edit</button>

                        </form>

                        <?php
                        if (isset($_POST['edit'])) {
                            $txt_judulberita = $_POST['txt_judulberita'];
                            $txt_beritatgl = $_POST['txt_beritatgl'];
                            $txt_beritaisi     = $_POST['txt_beritaisi'];
                            $txt_beritagambar     = $_POST['txt_beritagambar'];

                            $sql = $koneksi->query("UPDATE `tb_berita` SET  berita_judul = '$txt_judulberita',
                                                            berita_tgl = '$txt_beritatgl',
                                                            berita_isi = '$txt_beritaisi',
                                                            berita_gambar = '$txt_beritagambar'
                                                            WHERE
                                                            berita_id = '$dEdit'");

                            if ($sql) {
                                echo "<script>
                            alert('Data Berhasil Di Edit');
                            window.location='index.php?page=berita';
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