<?php include "conn.php";
$tgl = date('d M Y');
?>

<body onLoad="javascript:print()">

    <div class="panel-heading">
        <table width="100%">
            <tr>
                <td>
                    <div align="center">
                        <div align="center">
                            Laporan Data Kategori<br>CV. Mediatama<br><br></div>
                </td>
            </tr>
        </table>
    </div>

    <table border="2" cellpadding="5" cellspacing="0" align="center">
        <tr>
            <th>No</th>
            <th>Nama Kategori</th>

        </tr>
        <?php
        $sql = mysqli_query($koneksi, "SELECT * FROM tb_kategori ORDER BY kategori_id desc ");
        $no = 1;
        while ($pecah = mysqli_fetch_array($sql)) {
            echo "<tr>
  <td>$no</td>
  <td>$pecah[kategori_nama]</td>
    
	  </tr> ";
            $no++;
        }

        ?>
    </table>

    <br>
    <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
        <tr>
            <td width="63%" bgcolor="#FFFFFF">
                <p align="center"><br />
            </td>
            <td width="37%" bgcolor="#FFFFFF">
                <div align="center"><?php $tgl = date('d M Y');
                                    echo " $tgl"; ?><br />Pimpinan <br>
                    <br /><br />
                    <br /><br />
                    Bg Feri<br />
                </div>
            </td>
        </tr>
    </table>