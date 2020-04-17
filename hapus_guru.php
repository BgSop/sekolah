<?php
$id = $_GET['id'];
$ambil = $koneksi->query("delete from tb_guru where id_guru='$id'");
echo "<script>
alert('Data Berhasil Dihapus');
window.location='index.php?page=guru';
</script>";
