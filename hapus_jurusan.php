<?php
$id = $_GET['id'];
$ambil = $koneksi->query("delete from tb_jurusan where kd_jurusan='$id'");
echo "<script>
alert('Data Berhasil Di Hapus');
window.location='index.php?page=jurusan';
</script>";
