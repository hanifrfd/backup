<?php
include "data/koneksi.php";
$mysqli->query("DELETE FROM pegawai WHERE id = '$_GET[id]'");
echo "<script type='text/javascript'> alert('Data Berhasil Dihapus.')";
header("location:index.php");
?>
  	