<?php
session_destroy();
echo "
<script>
alert('Anda Telah Keluar');
window.location='index.php';
</script>";
