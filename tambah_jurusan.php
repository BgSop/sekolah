<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="index.php?page=jurusan">Jurusan</a>
        </li>
        <li class="breadcrumb-item active">
            Tambah Data
        </li>
    </ol>

    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            JURUSAN SMK 2 PADANG
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="index.php" class="btn btn-primary mb-4">Kembali</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <form enctype="multipart/form-data" method="POST" style="width:50%">
                        <form>
                            <div class="form-group">
                                <label>Nama Jurusan</label>
                                <input name="nama_jurusan" style="width:50%" type="text" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary" name="simpan">Submit</button>
                        </form>
                    </form>
                </table>
            </div>
            <?php
            if (isset($_POST['simpan'])) {
                $nama_jurusan = $_POST['nama_jurusan'];
                $koneksi->query("INSERT INTO tb_jurusan (nama_jurusan) VALUES ('$nama_jurusan')");
                echo "<script>
                alert(Data Berhasil Disimpan');
                window.location='index.php?page=jurusan';
                </script>";
            }
            ?>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated Yesterday ast 11:59 PM</div>
</div>