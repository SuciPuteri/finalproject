<?php

require './../../pages/core/connection.php';

$id = $_GET['idpegawai'];
$ambilData = mysqli_query($mysqli, "DELETE FROM tbl_data_pegawai WHERE id_tdp ='$id' ");
echo "<div align='center'><h5> ~ Data Berhasil di Hapus ~ <h5></div>";
echo "<meta http-equiv= 'refresh' content='1;url=http://localhost/finalprojectDp/pages/content/data_pegawai/datapegawai'>";

?>