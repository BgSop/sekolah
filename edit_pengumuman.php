<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title></title>
</head>

<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="indes.php?page=pengumuman">pengumuman</a>
        </li>
        <li class="breadcrumb-item active">
            Edit Data
        </li>
    </ol>

    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            PENGUMUMAN SMK 2 PADANG</div>
        <div class="card-body">

            <div class="table-responsive">
                <a href="index.php?page=pengumuman" class="btn btn-primary mb-4">Kembali</a>
                <?php
                $dEdit = $_GET['id'];
                $ambil = $koneksi->query("SELECT * FROM tb_pengumuman where id_pengumuman = '$dEdit'");
                $pecah = $ambil->fetch_assoc();


                ?>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <form action="" method="POST" style="width:50%">
                        <form>
                            <div class="form-group">
                                <label>Judul </label>
                                <input name="judul" style="width:50%" type="text" class="form-control" value="<?php echo $pecah['judul'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Isi Pengumuman</label>
                                <input name="isi_pengumuman" style="width:50%" type="text" class="form-control" value="<?php echo $pecah['isi_pengumuman'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Pengumuman</label>
                                <input name="tgl_pengumuman" style="width:50%" type="date" class="form-control" value="<?php echo $pecah['tgl_pengumuman'] ?>">
                            </div>

                            <div class="form-group">
                                <label>Gambar</label>
                                <input name="gambar" style="width:50%" type="file" class="form-control" value="<?php echo $pecah['gambar'] ?>">
                            </div>
                            <button type="submit" class="btn btn-primary" name="edit">Edit</button>
                        </form>
                    </form>
                </table>
                <?php
                if (isset($_POST['edit'])) {

                    $judul = $_POST['judul'];
                    $isi_pengumuman = $_POST['isi_pengumuman'];
                    $tgl_pengumuman = $_POST['tgl_pengumuman'];
                    $gambar         = $_POST['gambar'];

                    $sql = $koneksi->query("UPDATE `tb_pengumuman` SET judul='$judul', isi_pengumuman='$isi_pengumuman', tgl_pengumuman='$tgl_pengumuman', gambar='$gambar' WHERE id_pengumuman='$dEdit'");

                    if ($sql) {
                        echo "<script>
                        alert('Data Berhasil Di Edit');
                        window.location='index.php?page=pengumuman';
                        </script>";
                    }
                }
                ?>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated Yesterday at 11:59 PM</div>
    </div>
</div>