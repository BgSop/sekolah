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
            Tambah Data Berita
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
                <a href="index.php" class="btn btn-primary mb-4">Kembali</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <form enctype="multipart/form-data" method="POST" style="width: 50%">
                        <form>
                            <div class="form-group">
                                <label>Judul Berita</label>
                                <input name="berita_judul" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Admin</label>
                                <select name="admin_id" class="form-control">
                                    <option value="">-Pilih Admin-</option>

                                    <?php
                                    $sql = $koneksi->query("SELECT * FROM tb_admin");
                                    while ($data = $sql->fetch_array()) {
                                        echo " <option value='$data[admin_id]'>$data[admin_nama]</option>";
                                    }

                                    ?>

                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <select name="kategori_id" class="form-control">
                                    <option value="">-Pilih Kategori-</option>

                                    <?php
                                    $sql = $koneksi->query("SELECT * FROM tb_kategori");
                                    while ($data = $sql->fetch_array()) {
                                        echo " <option value='$data[kategori_id]'>$data[kategori_nama]</option>";
                                    }

                                    ?>

                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Berita</label>
                                <input name="berita_tgl" type="date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Isi Berita</label>
                                <textarea class="form-control" name="berita_isi" type="text"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Gambar </label>
                                <input name="foto" type="file" class="form-control">
                            </div>
                            <button type=" submit" class="btn btn-success" name="simpan">SIMPAN</button>
                        </form>
                    </form>
            </div>
            <?php
            if (isset($_POST['simpan'])) {
                $berita_judul = $_POST['berita_judul'];
                $berita_tgl = $_POST['berita_tgl'];
                $berita_isi = $_POST['berita_isi'];
                $lokasi_foto = $_FILES['foto']['tmp_name'];
                $nama_foto  = $_FILES['foto']['name'];
                $admin_id = $_POST['admin_id'];
                $kategori_id = $_POST['kategori_id'];

                move_uploaded_file($lokasi_foto, 'images/' . $nama_foto);

                $sql1 = $koneksi->query("INSERT INTO tb_berita VALUES (null,'$admin_id','$kategori_id','$berita_judul','$berita_tgl','$berita_isi','$nama_foto')");
                if ($sql1) {
                    echo "<script>
                alert('Data Tersimpan');
                window.location='index.php?page=berita';
                </script>";
                }
            }
            ?>