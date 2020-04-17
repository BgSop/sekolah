 <div class="container-fluid">
     <!-- Breadcrumbs-->
     <ol class="breadcrumb">
         <li class="breadcrumb-item">
             <a href="index.php">Home</a>
         </li>
         <li class="breadcrumb-item active">
             Admin
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
             Data Table Admin</div>
         <div class="card-body">
             <div class="table-responsive">
                 <a href="index.php?page=admin_tambah" class="btn btn-primary mb-4">Tambah Data</a>
                 <!-- <a href="laporan_cetakadmin.php" class="btn btn-primary mb-4">Cetak</a> -->
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>No</th>
                             <th>Username</th>
                             <th>Password</th>
                             <th>Nama</th>
                             <th width='20%'>Foto</th>
                             <th>Aksi</th>
                         </tr>
                     </thead>

                     <tbody>
                         <?php
                            $ambil = $koneksi->query("SELECT * FROM tb_admin");
                            $no = 1;
                            while ($pecah = $ambil->fetch_assoc()) {
                                // var_dump(($pecah));
                            ?>
                             <tr>
                                 <td><?php echo $no ?></td>
                                 <td><?php echo $pecah['admin_username'] ?></td>
                                 <td><?php echo $pecah['admin_password'] ?></td>
                                 <td><?php echo $pecah['admin_nama'] ?></td>
                                 <td><?php echo "<img src='images/$pecah[admin_foto]' class='img img-fluid'>" ?></td>

                                 <td>
                                     <a href="<?php echo "index.php?page=hapus_admin&id=$pecah[admin_id]" ?>" class="btn btn-primary">Hapus</a>
                                     <a href="<?php echo "index.php?page=edit&id=$pecah[admin_id]" ?>" class="btn btn-danger">Edit</a>
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