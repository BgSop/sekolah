<?php
$id = $_GET['id'];
$ambil = $koneksi->query("delete from tb_galeri where id_galeri='$id'");
echo "<script>
alert('Data Berhasil dihapus');
window.location='index.php?page=galeri';
</script>";
