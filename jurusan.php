<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item">Jurusan</li>
    </ol>

    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Data Jurusan SMK 2 Padang
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="index.php?page=tambah_jurusan" class="btn btn-primary mb-4">Tambah Data</a>
                <!-- <a href="" class="btn btn-primary  mb-4">Cetak</a> -->
                <table class="table table-bodered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr align="center">
                            <th>No</th>
                            <th>Nama jurusan</th>
                            <th>Visi</th>
                            <th>MIsi</th>
                            <th width="150px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $ambil = $koneksi->query("SELECT * FROM tb_jurusan");
                        $no = 1;
                        while ($pecah = $ambil->fetch_assoc()) {
                        ?>
                            <tr align="center">
                                <td><?php echo $no ?></td>
                                <td><?php echo $pecah['nama_jurusan'] ?></td>

                                <td>
                                    <a href="<?php echo "index.php?page=hapus_jurusan&id=$pecah[kd_jurusan]" ?>" class="btn btn-primary">Hapus</a>
                                    <a href="<?php echo "index.php?page=edit_jurusan&id=$pecah[kd_jurusan]" ?>" class="btn btn-danger">Edit</a>
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