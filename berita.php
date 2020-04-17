<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">
            Berita
        </li>
    </ol>

    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa table"></i>
            Data Tabel Berita</div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="index.php?page=tambah_berita" class="btn btn-primary mb-4">Tambah Data</a>
                <!-- <a href="" class="btn btn-primary mb-4 ">Cetak</a> -->
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr align="center">
                            <th>No</th>
                            <th>Judul Berita</th>
                            <th>Tanggal Berita</th>
                            <th>Isi Berita</th>
                            <th width='20%'>Gambar</th>
                            <th width="150px">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $ambil = $koneksi->query("SELECT * FROM tb_berita");
                        $no = 1;
                        while ($pecah = $ambil->fetch_assoc()) {
                        ?>

                            <tr align="center">
                                <td><?php echo $no ?></td>
                                <td><?php echo $pecah['judul'] ?></td>
                                <td><?php echo $pecah['tgl_berita'] ?></td>
                                <td><?php echo substr($pecah['isi_berita'], 0, 100) ?></td>
                                <td><?php echo "<img src='images/$pecah[gambar]' class='img img-fluid'>" ?></td>
                                <td>
                                    <a href="<?php echo "index.php?page=hapus_berita&id=$pecah[id_berita]" ?>" class="btn btn-primary">Hapus</a>
                                    <a href="<?php echo "index.php?page=berita_edit&id=$pecah[id_berita]" ?>" class="btn btn-danger">Edit</a>
                                </td>
                            </tr>
                            <?php $no++; ?>
                        <?php } ?>
                    </tbody>

                </table>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated Yesterday at 11:59 PM</div>
    </div>
</div>