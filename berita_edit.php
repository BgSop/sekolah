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
            <a href="index.php?page=berita">Berita</a>
        </li>

        <li class="breadcrumb-item active">
            Edit Data
        </li>
    </ol>

    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            BERITA SMK 2 PADANG</div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="index.php?page=berita" class="btn btn-primary mb-4 ">Kembali</a>
                <?php
                $dEdit = $_GET['id'];
                $ambil = $koneksi->query("SELECT * FROM tb_berita where id_berita = '$dEdit'");
                $pecah = $ambil->fetch_assoc();
                ?>

                <table class="table table-bordered" id="dataTabe" width="100%" cellspacing="0">
                    <form action="" method="POST" style="width:50%" enctype="multipart/form-data">
                        <form>
                            <div class="form-group">
                                <label>Judul Berita</label>
                                <input name="judul" style="width:50%" type="text" class="form-control" value="<?php echo $pecah['judul'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Berita</label>
                                <input name="tgl_berita" style="width:50%" type="date" class="form-control" value="<?php echo $pecah['tgl_berita'] ?>">
                            </div>
                            <div class="form-group">
                                <label>isi berita</label>
                                <input name="isi_berita" style="width:50%" type="text" class="form-control" value="<?php echo $pecah['isi_berita'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Gambar</label>
                                <img src="images/<?php echo $pecah['gambar'] ?>" width="200px" height="200px" style="margin-left: 80px;" alt="">
                                <input name="gambarBerita" style="width:50%" type="file" class="form-control" value="">
                            </div>
                            <button type="submit" class="btn btn-primary" name="edit">Edit</button>
                        </form>
                    </form>
                </table>
                <?php
                if (isset($_POST['edit'])) {
                    $judul = $_POST['judul'];
                    $tgl_berita = $_POST['tgl_berita'];
                    $isi_berita = $_POST['isi_berita'];
                    $lokasi_foto = $_FILES['gambarBerita']['tmp_name'];
                    $nama_foto = $_FILES['gambarBerita']['name'];


                    move_uploaded_file($lokasi_foto, 'images/' . $nama_foto);

                    $sql = $koneksi->query("UPDATE `tb_berita` SET judul = '$judul', tgl_berita = '$tgl_berita', isi_berita = '$isi_berita', gambar = '$nama_foto' WHERE id_berita = '$dEdit'");
                    // var_dump($sql);
                    // exit;
                    if ($sql) {
                        echo "<script>
                    alert('Data Berhasil DiEdit');
                    window.location='index.php?page=berita';
                    </script>";
                    }
                }
                ?>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated Yesterday at 11:59 PM</div>
    </div>
</div>