<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">
            Pengumuman
        </li>
    </ol>

    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa table"></i>
            PENGUMUMAN SMK 2 PADANG</div>
        <div class="card-body">
            <div class="table-reponsive">
                <a href="index.php?page=tambah_pengumuman" class="btn btn-primary mb-4">Tambah Data</a>
                <!-- <a href="" class="btn btn-primary mb-4">Cetak</a> -->
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr align="center">
                            <th>No</th>
                            <th>Judul</th>
                            <th>Isi Pengumuman</th>
                            <th>Tanggal Pengumuman</th>
                            <th width='20%'>Gambar</th>
                            <th width="150px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $ambil = $koneksi->query("SELECT * FROM tb_pengumuman");
                        $no = 1;
                        while ($pecah = $ambil->fetch_assoc()) {
                        ?>

                            <tr align="center">
                                <td><?php echo $no ?></td>
                                <td><?php echo $pecah['judul'] ?></td>
                                <td><?php echo substr($pecah['isi_pengumuman'], 0, 40) ?></td>
                                <td><?php echo $pecah['tgl_pengumuman'] ?></td>
                                <td><img src="images/<?php echo $pecah['gambar'] ?>" style="width: 100px; height:80px;" alt=""></td>
                                <td>
                                    <a href="<?php echo "index.php?page=hapus_pengumuman&id=$pecah[id_pengumuman]" ?>" class="btn btn-primary">Hapus</a>
                                    <a href="<?php echo "index.php?page=edit_pengumuman&id=$pecah[id_pengumuman]" ?>" class="btn btn-danger">Edit</a>
                                </td>
                            </tr>
                            <?php $no++; ?>
                        <?php } ?>

                    </tbody>
                </table>
            </div>

        </div>
        <div class="card-footer small text-muted">Updated Yesterday at 11:59PM </div>
    </div>

</div>