<?php

require './../../pages/core/connection.php';

$id = $_GET['idberita'];
$ambilData = mysqli_query($mysqli, "DELETE FROM tbl_berita WHERE id_tb ='$id' ");
echo "<div align='center'><h5> ~ Berita Berhasil di Hapus ~ <h5></div>";
echo "<meta http-equiv= 'refresh' content='1;url=http://localhost/finalprojectDp/pages/content/berita/berita'>";

?>