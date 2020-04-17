<div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Detail Berita
    </ol>
    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Detail Pendaftaran</div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="index.php?page=berita" class="btn btn-primary mb-4 ">Kembali</a>
                <div class="container">
                    <section class="konten">
                        <div class="container">

                            <?php
                            $id = $_GET['id'];

                            $ambil = $koneksi->query("SELECT * FROM tb_berita WHERE id_berita = '$id' ");
                            $pecah =  $ambil->fetch_assoc();
                            ?>
                            <div class="row">
                                <div class="col-md-4">
                                    <h3>DETAIL BERITA</h3>
                                    <strong>Judul: <?php echo $pecah['judul'] ?> </strong><br>
                                    <strong>Tanggal Berita :</strong> <?php echo $pecah['tgl_berita'] ?> <br>
                                    <strong>Isi :</strong> <?php echo $pecah['isi_berita'] ?> <br>
                                    <strong>Gambar : </strong><?php echo "<img src='images/$pecah[gambar]' class='img img-fluid'>" ?> <br>


                                </div>






                            </div>







                        </div>
                    </section>
                </div>


            </div>
        </div>

    </div>
</div>