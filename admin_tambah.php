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
            Tambah Data
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
                <a href="index.php" class="btn btn-primary mb-4">Kembali</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <form enctype="multipart/form-data" method="POST" style="width: 50%">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input name="admin_username" style="width:50%" ;type="text" class="form-control">

                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input name="admin_password" style="width:50%" type="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Foto</label>
                                <input type="file" name="foto" style="width:50%" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <input name="admin_nama" style="width:50%" type="text" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary" name="simpan">Submit</button>
                        </form>
                </table>
            </div>
            <?php
            if (isset($_POST['simpan'])) {
                $admin_username = $_POST['admin_username'];
                $admin_password = $_POST['admin_password'];

                $lokasi_foto = $_FILES['foto']['tmp_name'];

                $nama_foto  = $_FILES['foto']['name'];

                $admin_nama = $_POST['admin_nama'];

                move_uploaded_file($lokasi_foto, 'images/' . $nama_foto);


                $koneksi->query("INSERT INTO tb_admin
                                        VALUES('',
                                            '$admin_username',
                                            '$admin_password',
                                            '$admin_nama',
                                            '$nama_foto'
                                        )");
                echo "<script>
alert('Data Tersimpan');
window.location='index.php?page=admin';
</script>";
            }
            ?>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
</div>
</div>
</div>