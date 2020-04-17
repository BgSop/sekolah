<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="index.php?page=guru">Guru</a>
        </li>
        <li class="breadcrumb-item active">
            Tambah Data
        </li>
    </ol>

    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            DATA GURU SMK 2 PADANG
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="index.php" class="btn btn-primary mb-4">Kembali</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <form enctype="multipart/form-data" method="POST" style="width:50%">
                        <form>
                            <div class="form-group">
                                <label>NIP</label>
                                <input name="nip" style="width:50%" type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Nama Guru</label>
                                <input name="nama_guru" style="width:50%" type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="form-control" style="width:50%" name="jenis_kelamin" id="">
                                    <option value="">--Pilih--</option>
                                    <option value="Perempuan">Perempuan</option>
                                    <option value="Laki-Laki">Laki-Laki</option>

                                </select>
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <input name="alamat" style="width:50%" type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Agama</label>
                                <input name="agama" style="width:50%" type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>No. Telp</label>
                                <input name="no_telp" style="width:50%" type="text" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary" name="simpan">Submit</button>
                        </form>
                    </form>
                </table>
            </div>
            <?php
            if (isset($_POST['simpan'])) {

                $nip = $_POST['nip'];
                $nama_guru = $_POST['nama_guru'];
                $jenis_kelamin = $_POST['jenis_kelamin'];
                $alamat = $_POST['alamat'];
                $agama =  $_POST['agama'];
                $no_telp = $_POST['no_telp'];

                $koneksi->query("INSERT INTO tb_guru(nip,nama_guru,jenis_kelamin,alamat,agama,no_telp) 
                                                    VALUES (
                                                        '$nip',
                                                        '$nama_guru',
                                                        '$jenis_kelamin',
                                                        '$alamat',
                                                        '$agama',
                                                        '$no_telp')");
                echo "<script>
                alert('Data Tersimpan');
                window.location='index.php?page=guru';
                </script>";
            }
            ?>
        </div>
    </div>
    <div class="card-footer small text-muted">Update Yesterday at 11:59 PM</div>