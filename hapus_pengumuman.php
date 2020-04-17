<?php 
$id = $_GET['id'];
$ambil = $koneksi->query("delete from tb_pengumuman where id_pengumuman='$id'");
echo "<script>
alert('Data Berasil Di Hapus');
window.location='index.php?page=pengumuman';
</script>";
