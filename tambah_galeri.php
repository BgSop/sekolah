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
            GALERI SMK 2 PADANG</div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="index.php" class="btn btn-primary mb-4">Kembali</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <form enctype="multipart/form-data" method="POST" style="width: 50%">
                        <form>
                            <div class="form-group">
                                <label>Judul</label>
                                <input name="judul" style="width:50%" ;type="text" class="form-control">

                            </div>

                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" name="gambar" style="width:50%" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary" name="simpan">Submit</button>
                        </form>
                </table>
            </div>
            <?php
            if (isset($_POST['simpan'])) {
                $judul = $_POST['judul'];


                $lokasi_foto = $_FILES['gambar']['tmp_name'];
                $nama_foto  = $_FILES['gambar']['name'];



                move_uploaded_file($lokasi_foto, 'images/' . $nama_foto);


                $koneksi->query("INSERT INTO tb_galeri (judul,gambar)
                                        VALUES(
                                            '$judul',
                                            '$nama_foto'
                                        )");
                echo "<script>
alert('Data Tersimpan');
window.location='index.php?page=galeri';
</script>";
            }
            ?>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
</div>
</div>
</div>