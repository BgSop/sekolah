<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">Home
            <!-- <a href="index.php">Home</a> -->
        </li>

    </ol>

    <!-- Icon Cards-->
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-comments"></i>
                    </div>
                    <?php
                    $ambil = $koneksi->query("SELECT COUNT(*) FROM tb_admin");
                    $pecah = $ambil->fetch_assoc();
                    ?>
                    <div class="mr-5"><?php echo $pecah['COUNT(*)'] ?> Admin</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="index.php?page=admin">
                    <span class="float-left">Lihat Data Admin</span>
                    <span class="float-right">
                        <i class="fas fa-angle-right"></i>
                    </span>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-list"></i>
                    </div>
                    <?php
                    $ambil = $koneksi->query("SELECT COUNT(*) FROM tb_berita");
                    $pecah = $ambil->fetch_assoc();
                    ?>
                    <div class="mr-5"><?php echo $pecah['COUNT(*)'] ?> Berita</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="index.php?page=berita">
                    <span class="float-left">Lihat Data Berita</span>
                    <span class="float-right">
                        <i class="fas fa-angle-right"></i>
                    </span>
                </a>
            </div>
        </div>
        <!-- <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-shopping-cart"></i>
                    </div>
                    <?php
                    $ambil = $koneksi->query("SELECT COUNT(*) FROM tb_jurusan");
                    $pecah = $ambil->fetch_assoc();
                    ?>
                    <div class="mr-5"><?php echo $pecah['COUNT(*)'] ?> urusan</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="index.php?page=jurusan">
                    <span class="float-left">Lihat Data Jurusan</span>
                    <span class="float-right">
                        <i class="fas fa-angle-right"></i>
                    </span>
                </a>
            </div>
        </div> -->
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-life-ring"></i>
                    </div>
                    <?php
                    $ambil = $koneksi->query("SELECT COUNT(*) FROM tb_pengumuman");
                    $pecah = $ambil->fetch_assoc();
                    ?>
                    <div class="mr-5"><?php echo $pecah['COUNT(*)'] ?> Pengumuman</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="index.php?page=pengumuman">
                    <span class="float-left">Lihat Data Pengumuman</span>
                    <span class="float-right">
                        <i class="fas fa-angle-right"></i>
                    </span>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-shopping-cart"></i>
                    </div>
                    <?php
                    $ambil = $koneksi->query("SELECT COUNT(*) FROM tb_guru");
                    $pecah = $ambil->fetch_assoc();
                    ?>
                    <div class="mr-5"><?php echo $pecah['COUNT(*)'] ?> Guru</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="index.php?page=guru">
                    <span class="float-left">Lihat Data Guru</span>
                    <span class="float-right">
                        <i class="fas fa-angle-right"></i>
                    </span>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-comments"></i>
                    </div>
                    <?php
                    $ambil = $koneksi->query("SELECT COUNT(*) FROM tb_galeri");
                    $pecah = $ambil->fetch_assoc();
                    ?>
                    <div class="mr-5"><?php echo $pecah['COUNT(*)'] ?> Galeri</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="index.php?page=galeri">
                    <span class="float-left">Lihat Data Galeri</span>
                    <span class="float-right">
                        <i class="fas fa-angle-right"></i>
                    </span>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-life-ring"></i>
                    </div>
                    <?php
                    $ambil = $koneksi->query("SELECT COUNT(*) FROM tb_pendaftaran");
                    $pecah = $ambil->fetch_assoc();
                    ?>
                    <div class="mr-5"><?php echo $pecah['COUNT(*)'] ?> Pendaftaran</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="index.php?page=pendaftaran">
                    <span class="float-left">Lihat Data pendaftaran</span>
                    <span class="float-right">
                        <i class="fas fa-angle-right"></i>
                    </span>
                </a>
            </div>
        </div>
    </div>

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

</div>
</div>