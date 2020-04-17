<?php
$id = $_GET['id'];
$ambil = $koneksi->query("delete from tb_admin where admin_id='$id'");
echo "<script>
alert('Data Berhasil dihapus');
window.location='index.php?page=admin';
</script>";
