<?php
$id = $_GET['id'];
$ambil = $koneksi->query("delete from tb_pendaftaran where id_siswa='$id'");
echo "<script>
alert('Data Berhasil Di Hapus');
window.location='index.php?page=pendaftaran';
</script>";
