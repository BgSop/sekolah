 <div class="container-fluid">
     <ol class="breadcrumb">
         <li class="breadcrumb-item">
             <a href="index.php">Home</a>
         </li>
         <li class="breadcrumb-item active">
             Pendaftaran
         </li>
     </ol>

     <div class="card  mb-3">
         <div class="card-header">
             <i class="fas fa-table"></i>
             DATA PENDAFTARAN CALON SISWA SMK 2 PADANG
         </div>
         <div class="card-body">
             <div class="table-responsive"></div>
             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 <thead>
                     <tr align="center">
                         <th>No</th>
                         <th>Nama Lengkap</th>
                         <th>NISN</th>
                         <th>Tempat Lahir Siswa</th>
                         <th>Tgl Lahir Siswa</th>
                         <th width='20%'>Foto</th>
                         <th width="150px">Aksi</th>
                     </tr>
                 </thead>
                 <tbody>
                     <?php
                        $ambil = $koneksi->query("SELECT * FROM tb_pendaftaran");
                        $no = 1;
                        while ($pecah = $ambil->fetch_assoc()) {
                        ?>

                         <tr align="center">
                             <td><?php echo $no ?></td>
                             <td><?php echo $pecah['nama_lengkap_siswa'] ?></td>
                             <td><?php echo $pecah['nisn_siswa'] ?></td>
                             <td><?php echo $pecah['tempat_lahir_siswa'] ?></td>
                             <td><?php echo $pecah['tgl_lahir_siswa'] ?></td>
                             <td><img src="pendaftaran_siswa/<?php echo $pecah['foto'] ?>" style="width:100px; height:80px" alt=""></td>
                             <td>
                                 <a href=" <?php echo "index.php?page=hapus_pendaftaran&id=$pecah[id_siswa]" ?>" class="btn btn-primary">Hapus</a>
                                 <a href="<?php echo "index.php?page=detail_pendaftaran&id=$pecah[id_siswa]" ?>" class="btn btn-primary">Detail</a>
                             </td>
                         </tr>
                         <?php $no++; ?>
                     <?php } ?>
                 </tbody>
             </table>
         </div>
         <div class="card-footer small text-muted">Updated Yesterday at 11:59 PM</div>
     </div>
 </div>