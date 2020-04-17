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
            <a href="index.php?page=galeri">Galeri</a>
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
            GALERI SMK 2 PADANG</div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="index.php?page=galeri" class="btn btn-primary mb-4">Kembali</a>
                <?php
                $dEdit = $_GET['id'];
                $ambil = $koneksi->query("SELECT * FROM tb_galeri WHERE id_galeri = '$dEdit'");
                $pecah = $ambil->fetch_assoc();
                ?>


                <form action="" method="POST" style="width: 50%" enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Judul</label>
                        <input name="judul" style="width:50%" type="text" class="form-control" value=" <?php echo $pecah['judul'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" name="gambar" style="width:50%" class="form-control" value=" <?php echo $pecah['gambar'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary" name="edit">edit</button>

                </form>

                <?php
                if (isset($_POST['edit'])) {
                    $judul = $_POST['judul'];
                    $lokasi_foto = $_FILES['gambar']['tmp_name'];
                    $nama_foto = $_FILES['gambar']['name'];

                    move_uploaded_file($lokasi_foto, 'images/' . $nama_foto);

                    $sql = $koneksi->query("UPDATE `tb_galeri` SET  judul = '$judul',
                                                           gambar = '$nama_foto'
                                                            WHERE
                                                            id_galeri = '$dEdit'");

                    if ($sql) {
                        echo "<script>
                            alert('Data Berhasil Di Edit');
                            window.location='index.php?page=galeri';
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