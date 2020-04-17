<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">
            Guru
        </li>
    </ol>

    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Data Guru SMK 2 Padang</div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="index.php?page=tambah_guru" class="btn btn-primary mb-4">Tambah Data</a>
                <!-- <a href="" class="btn btn-primary mb-4">Cetak</a> -->
                <table class="table table-bprdered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr align="center">
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama Guru</th>
                            <th>Jenis Kelamin</th>

                            <th width="150px">Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $ambil = $koneksi->query("SELECT * FROM tb_guru");
                        $no = 1;
                        while ($pecah = $ambil->fetch_assoc()) {
                        ?>
                            <tr align="center">
                                <td><?php echo $no ?></td>
                                <td><?php echo $pecah['nip'] ?></td>
                                <td><?php echo $pecah['nama_guru'] ?></td>
                                <td><?php echo $pecah['jenis_kelamin'] ?></td>

                                <td align="center">
                                    <a href="<?php echo "index.php?page=hapus_guru&id=$pecah[id_guru]" ?>" class="btn btn-primary">Hapus</a>
                                    <a href="<?php echo "index.php?page=edit_guru&id=$pecah[id_guru]" ?>" class="btn btn-danger">Edit</a>
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