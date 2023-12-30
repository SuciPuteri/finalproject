<?php
require './../../pages/core/connection.php';


if(isset($_POST['submit'])) {
    global $mysqli;

    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $link = $_POST['link'];


    if mysqli_query($mysqli, "INSERT INTO tbl_berita (judul_tb, isi_tb, link_tb) 
        VALUES ('$judul', '$isi', '$link')") {

        echo "<div align='center'><h5> ~ Data berhasil dimasukkan ke dalam database ~ <h5></div>";
        echo "<meta http-equiv= 'refresh' content='1;url=http://localhost/FinalProjectdp/pages/content/berita/berita.php'>";
    } else {
        echo "Gagal menyimpan data ke database.";
    }
}
?>
