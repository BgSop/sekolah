<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="index.php?page=berita">Berita</a>
        </li>
        <li class="breadcrumb-item active">
            Tambah Data
        </li>
    </ol>

    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Berita SMK 2 PADANG
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="index.php" class="btn btn-primary mb-4">Kembali</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <form enctype="multipart/form-data" method="POST" style="width: 50%">
                        <form>
                            <div class="form-group">
                                <label>Judul Berita</label>
                                <input name="judul" style="width:50%" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Berita</label>
                                <input name="tgl_berita" style="width:50%" type="date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Isi Berita</label>
                                <input name="isi_berita" style="width:50%" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Gambar</label>
                                <input name="gambar" style="width:50%" type="file" class="form-control">
                            </div>
                            <button type="submit" class="bt btn-primary" name="simpan">Submit</button>
                        </form>
                </table>
            </div>
            <?php
            if (isset($_POST['simpan'])) {
                $judul = $_POST['judul'];
                $tgl_berita = $_POST['tgl_berita'];
                $isi_berita = $_POST['isi_berita'];
                $lokasi_foto = $_FILES['gambar']['tmp_name'];
                $nama_foto = $_FILES['gambar']['name'];

                move_uploaded_file($lokasi_foto, 'images/' . $nama_foto);

                $koneksi->query("INSERT INTO tb_berita (judul,tgl_berita,isi_berita,gambar)
                                                        VALUES (
                                                             '$judul',
                                                             '$tgl_berita', 
                                                             '$isi_berita', 
                                                             '$nama_foto')");

                echo "<script>
alert('Data Tersimpan');
window.location='index.php?page=berita';
</script>";
            }
            ?>
        </div>
    </div class="card-footer small text-muted">Updated yesterday at 11:59 PM
</div>
</div>