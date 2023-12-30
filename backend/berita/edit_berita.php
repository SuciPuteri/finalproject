<?php
require './../../pages/core/connection.php';


if(isset($_POST['submit'])) {
    $id = $_GET['idberita'];

    $judul = mysqli_real_escape_string($mysqli, $_POST['judul']);
    $isi = mysqli_real_escape_string($mysqli, $_POST['isi']);
    $link = mysqli_real_escape_string($mysqli, $_POST['link']);

    $QueryEditBerita = mysqli_query($mysqli, "UPDATE tbl_berita SET judul_tb = '$judul', isi_tb = '$isi', link_tb = '$link' WHERE id_tb ='$id'");

    if ($QueryEditBerita){
        echo "<div align='center'><h5> ~ Berita Berhasil Diupdate ~ <h5></div>";
        // echo "<meta http-equiv= 'refresh' content='10;url=http://localhost/FinalProjectdp/pages/content/berita/berita.php'>";
    } else {
        echo "Gagal menyimpan data ke database.";
    }
}
?>
