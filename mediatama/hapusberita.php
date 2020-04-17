<?php
$id = $_GET['id'];
$ambil = $koneksi->query("delete from tb_berita where berita_id='$id'");
echo "<script>
alert('Data berhasil dihapus');
window.location='index.php?page=berita';
</script>";
