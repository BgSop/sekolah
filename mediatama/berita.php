<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item">Berita</li>
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
                <a href="index.php?page=tambah_berita" class="btn btn-primary mb-4">Tambah Data</a>
                <a href="cetak_laporanberita.php" target="_blank" class="btn btn-primary mb-4">Cetak</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Berita </th>
                            <th>Tanggal Berita </th>
                            <th>Isi Berita </th>
                            <th>Gambar Berita </th>
                            <th width="15%" align="center">Aksi</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $ambil = $koneksi->query("SELECT * FROM tb_berita");
                        $no = 1;
                        while ($pecah = $ambil->fetch_assoc()) {
                            // var_dump(($pecah));
                        ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $pecah['berita_judul'] ?></td>
                                <td><?php echo $pecah['berita_tgl'] ?></td>
                                <td><?php echo $pecah['berita_isi'] ?></td>
                                <td><img src="<?php echo "images/" . $pecah['berita_gambar'] ?>" style="width:100%" alt=""></td>
                                <td>
                                    <a href="<?php echo "index.php?page=hapusberita&id=$pecah[berita_id]" ?>" class="btn btn-primary">Hapus</a>
                                    <a href="<?php echo "index.php?page=edit_berita&id=$pecah[berita_id]" ?>" class="btn btn-danger">Edit</a>
                                </td>
                            </tr>

                        <?php
                            $no++;
                        } ?>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
</div>
</div>
</div>