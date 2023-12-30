<?php

require './../../pages/core/connection.php';

if(isset($_POST['submit'])){
    $id = $_GET['idpegawai'];

    $ID = mysqli_real_escape_string($mysqli, $_POST['idpegawai']);
    $NIK = mysqli_real_escape_string($mysqli, $_POST['nikpegawai']);
    $NAMA = mysqli_real_escape_string($mysqli, $_POST['nama']);
    $JK = mysqli_real_escape_string($mysqli, $_POST['jeniskelamin']);
    $JABATAN = mysqli_real_escape_string($mysqli, $_POST['jabatan']);
    $MASAJABATAN = mysqli_real_escape_string($mysqli, $_POST['masajabatan']);
    $ALAMAT = mysqli_real_escape_string($mysqli, $_POST['alamat']);
    $PASSWORD = mysqli_real_escape_string($mysqli, $_POST['password']);
    $NOTELEPON = mysqli_real_escape_string($mysqli, $_POST['nohp']);
    $EMAIL = mysqli_real_escape_string($mysqli, $_POST['email']);    

    $PASSWORD = password_hash($PASSWORD, PASSWORD_DEFAULT);
    $update_at_tdp = date('y-m-d H:i:s', time());

    $QueryEditData = mysqli_query($mysqli, "UPDATE tbl_data_pegawai SET id_pegawai_tdp = '$ID', NIK_tdp = '$NIK', nama_lengkap_tdp = '$NAMA', jenis_kelamin_tdp = '$JK', jabatan_tdp = '$JABATAN', masa_jabatan_tdp = '$MASAJABATAN', alamat_tdp = '$ALAMAT', password_tdp = '$PASSWORD', no_hp_tdp = '$NOTELEPON', email_tdp = '$EMAIL', update_at_tdp = '$update_at_tdp' WHERE id_tdp ='$id'");

    if ($QueryEditData) {
        echo "<div align='center'><h5> ~ Data berhasil diupdate ~ </h5></div>";
        echo "<meta http-equiv= 'refresh' content='1;url=http://localhost/FinalProjectdp/pages/content/data_pegawai/datapegawai'>";
    } else {
        echo "<div align='center'><h5> ~ Gagal mengupdate data ~ </h5></div>";
    }
}

?>
