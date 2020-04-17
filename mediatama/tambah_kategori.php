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
            Tambah Data Kategori
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
                <a href="index.php" class="btn btn-primary mb-4">Kembali</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <form action="" method="POST" style="width: 50%">
                        <form>
                            <div class="form-group">
                                <label>Nama Kategori</label>
                                <input name="kategori_nama" type="text" class="form-control">
                            </div>
                            <button type=" submit" class="btn btn-success" name="simpan">SIMPAN</button>
                        </form>
                    </form>
            </div>
            <?php
            if (isset($_POST['simpan'])) {
                $kategori_nama = $_POST['kategori_nama'];
                $koneksi->query("INSERT INTO `tb_kategori`(`kategori_id`, `kategori_nama`) VALUES (null,'$kategori_nama')");
                echo "<script>
alert('Data Tersimpan');
window.location='index.php?page=kategori';
</script>";
            }
            ?>