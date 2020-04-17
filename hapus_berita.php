<?php
$id = $_GET['id'];
$ambil = $koneksi->query("delete from tb_berita where id_berita='$id'");
echo "<script>
alert('Data Berhasil Dihapus');
window.location='index.php?page=berita';
</script>";
