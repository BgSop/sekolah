<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>

        </li>
        <li class="breadcrumb-item">
            <a href="index.php>page=pengumuman">pengumuman</a>
        </li>
        <li class="breadcrumb-item active">
            Tambah Data
        </li>

    </ol>


    <div class="card mb-3">

        <div class="card-header">
            <i class="fas fa table"></i>
            PENGUMUMAN SMK 2 PADANG </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="index.php" class="btn btn-primary mb-4">Kembali</a>
                <table class="table table bordered" id="dataTable" width="100%" cellspacing="0">
                    <form enctype="multipart/form-data" method="POST" style="width:50">
                        <form>
                            <div class="form-group">
                                <label>Judul</label>
                                <input name="judul" style="width:50%" type="text" class="form-control">

                            </div>
                            <div class="form-group">
                                <label>Isi Pengumuman</label>
                                <input name="isi_pengumuman" style="width:50%" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Pengumuman</label>
                                <input name="tgl_pengumuman" style="width:50%" type="date" class="form-control">
                            </div>
                            <div class="form group">
                                <label>Gambar</label>
                                <input name="gambar" style="width:50%" type="file" class="form-control">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary" name="simpan">submit</button>
                        </form>
                    </form>
                </table>
            </div>
            <?php
            if (isset($_POST['simpan'])) {

                $judul = $_POST['judul'];
                $isi_pengumuman   = $_POST['isi_pengumuman'];
                $tgl_pengumuman = $_POST['tgl_pengumuman'];
                $lokasi_foto = $_FILES['gambar']['tmp_name'];
                $nama_foto = $_FILES['gambar']['name'];
                move_uploaded_file($lokasi_foto, 'images/' . $nama_foto);

                $koneksi->query("INSERT INTO tb_pengumuman (judul,isi_pengumuman,tgl_pengumuman,gambar)
                                                                VALUES (
                                                                    '$judul',
                                                                    '$isi_pengumuman',
                                                                    '$tgl_pengumuman',
                                                                    '$nama_foto')");

                echo "<script>
                    alert('Data Tersimpan');
                    window.location='index.php?page=pengumuman';
                    </script>";
            }
            ?>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>