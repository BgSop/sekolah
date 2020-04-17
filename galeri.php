<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">
            Galeri
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
            GALERI SMK 2 PADANG</div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="index.php?page=tambah_galeri" class="btn btn-primary mb-4">Tambah Data</a>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr align="center">
                            <th>No</th>
                            <th>Judul</th>
                            <th width='20%'>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $ambil = $koneksi->query("SELECT * FROM tb_galeri");
                        $no = 1;
                        while ($pecah = $ambil->fetch_assoc()) {
                            // var_dump(($pecah));
                        ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $pecah['judul'] ?></td>
                                <td><?php echo "<img src='images/$pecah[gambar]' class='img img-fluid'>" ?></td>

                                <td>
                                    <a href="<?php echo "index.php?page=hapus_galeri&id=$pecah[id_galeri]" ?>" class="btn btn-primary">Hapus</a>
                                    <a href="<?php echo "index.php?page=edit_galeri&id=$pecah[id_galeri]" ?>" class="btn btn-danger">Edit</a>
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