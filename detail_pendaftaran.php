<div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Detail Pendaftaran
    </ol>
    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Detail Pendaftaran</div>
        <div class="card-body">
            <div class="table-responsive">

                <div class="container">


                    <section class="konten">
                        <div class="container">



                            <?php
                            $id = $_GET['id'];

                            $ambil = $koneksi->query("SELECT * FROM tb_pendaftaran WHERE id_siswa = '$id' ");
                            $pecah =  $ambil->fetch_assoc();



                            ?>


                            <div class="row">
                                <div class="col-md-4">
                                    <h3>Data Siswa</h3>
                                    <strong>Nama Lengkap Siswa: <?php echo $pecah['nama_lengkap_siswa'] ?> </strong><br>
                                    Kota : <?php echo $pecah['kota_siswa'] ?> <br>
                                    Alamat : <?php echo $pecah['alamat_siswa'] ?> <br>
                                    Provinsi : <?php echo $pecah['provinsi_siswa'] ?> <br>
                                    Jenis Kelamin : <?php echo $pecah['jk_siswa'] ?> <br>
                                    Agama : <?php echo $pecah['agama_siswa'] ?><br>
                                    No HP : <?php echo $pecah['nohp_siswa'] ?>

                                </div>
                                <div class="col-md-4">
                                    <h3>Data Orang Tua</h3>
                                    <strong>Nama Ayah: <?php echo $pecah['nm_ayah'] ?> </strong><br>
                                    Nama Ibu: <?php echo $pecah['nm_ibu'] ?> <br>
                                    Alamat: <?php echo $pecah['alamat_ortu'] ?> <br>
                                    No. HP: <?php echo $pecah['nohp_ortu'] ?><br>
                                    Penghasilan: <?php echo $pecah['penghasilan_ortu'] ?>
                                </div>
                                <div class="col-md-4">
                                    <h3>Data Wali</h3>
                                    <strong>Nama Wali: <?php echo $pecah['nm_wali'] ?> </strong><br>
                                    Alamat: <?php echo $pecah['alamat_wali'] ?> <br>
                                    No. HP: <?php echo $pecah['nohp_wali'] ?><br>
                                    Penghasilan: <?php echo $pecah['penghasilan_wali'] ?>



                                </div>





                            </div>







                        </div>
                    </section>
                </div>


            </div>
        </div>

    </div>
</div>