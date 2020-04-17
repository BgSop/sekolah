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
            <a href="index.php?page=guru">Guru</a>
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
            DATA GURU SMK 2 PADANG</div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="index.php?page=guru" class="btn btn-primary mb-4">Kembali</a>
                <?php
                $dEdit = $_GET['id'];
                $ambil = $koneksi->query("SELECT * FROM tb_guru WHERE id_guru = '$dEdit'");
                $pecah = $ambil->fetch_assoc();
                ?>


                <form action="" method="POST" style="width: 50%">
                    <div class="form-group">
                        <label>NIP</label>
                        <input name="nip" style="width:50%" type="text" class="form-control" value=" <?php echo $pecah['nip'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama_guru" style="width:50%" class="form-control" value=" <?php echo $pecah['nama_guru'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" style="width:50%" name="jenis_kelamin" value="  <?php echo $pecah['jenis_kelamin'] ?>" id="">
                            <option value="">--Pilih--</option>
                            <option value="Perempuan">Perempuan</option>
                            <option value="Laki-Laki">Laki-Laki</option>

                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" name="edit">edit</button>
                </form>
                <?php
                if (isset($_POST['edit'])) {
                    $nip = $_POST['nip'];
                    $nama_guru  = $_POST['nama_guru'];
                    $jenis_kelamin  = $_POST['jenis_kelamin'];
                    $alamat  = $_POST['alamat'];
                    $agama  = $_POST['agama'];
                    $no_telp  = $_POST['no_telp'];

                    $sql = $koneksi->query("UPDATE `tb_guru` SET  nip = '$nip',
                                                            nama_guru = '$nama_guru',
                                                            jenis_kelamin = '$jenis_kelamin',
                                                            alamat = '$alamat',
                                                            agama = '$agama',
                                                            no_telp = '$no_telp'
                                                            WHERE
                                                            id_guru = '$dEdit'");

                    if ($sql) {
                        echo "<script>
                            alert('Data Berhasil Di Edit');
                            window.location='index.php?page=guru';
                            </script>";
                    }
                }

                ?>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
</div>