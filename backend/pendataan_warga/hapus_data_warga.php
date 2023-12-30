<?php

require './../../pages/core/connection.php';

$id = $_GET['idwarga'];
$ambilData = mysqli_query($mysqli, "DELETE FROM tbl_data_warga WHERE id_tdw='$id' ");
echo "<div align='center'><h5> ~ Data Berhasil di Hapus ~ <h5></div>";
echo "<meta http-equiv= 'refresh' content='1;url=http://localhost/finalprojectDp/pages/content/pendataan_warga/datawargadesa'>";

?>