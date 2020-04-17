<?php
$id = $_GET['id'];
$ambil = $koneksi->query("delete from tb_kategori where kategori_id='$id'");
echo "<script>
alert('Data berhasil dihapus');
window.location='index.php?page=kategori';
</script>";
