<?php

require './../../pages/core/connection.php';

if (isset($_POST['submit'])) {

    $id = $_GET['idwarga'];
    }

    $NIK = mysqli_real_escape_string($mysqli, $_POST['nik']);
    $NAMA = mysqli_real_escape_string($mysqli, $_POST['nama']);
    $TEMPATLAHIR = mysqli_real_escape_string($mysqli, $_POST['tempatlahir']);
    $TANGGALLAHIR = mysqli_real_escape_string($mysqli, $_POST['tanggallahir']);
    $JK = mysqli_real_escape_string($mysqli, $_POST['jeniskelamin']);
    $ALAMAT = mysqli_real_escape_string($mysqli, $_POST['alamat']);
    $PROVINSI = mysqli_real_escape_string($mysqli, $_POST['provinsi']);
    $KABUPATEN = mysqli_real_escape_string($mysqli, $_POST['kabupaten']);
    $KECAMATAN = mysqli_real_escape_string($mysqli, $_POST['kecamatan']);
    $DUSUN = mysqli_real_escape_string($mysqli, $_POST['dusun']);
    $KEWARGANEGARAAN = mysqli_real_escape_string($mysqli, $_POST['kewarganegaraan']);
    $AGAMA = mysqli_real_escape_string($mysqli, $_POST['agama']);
    $PENDIDIKAN = mysqli_real_escape_string($mysqli, $_POST['pendidikan']);
    $PEKERJAAN = mysqli_real_escape_string($mysqli, $_POST['pekerjaan']);
    $STATUSPERKAWINAN = mysqli_real_escape_string($mysqli, $_POST['statusperkawinan']);
    $STATUSHUBUNGAN = mysqli_real_escape_string($mysqli, $_POST['statushubungan']);
    $NAMAAYAH = mysqli_real_escape_string($mysqli, $_POST['namaayah']);
    $NAMAIBU = mysqli_real_escape_string($mysqli, $_POST['namaibu']);

    $update_at_tdw = date('y-m-d H:i:s', time());


    //Tambah Data Warga
    $QueryEditData = mysqli_query($mysqli,"UPDATE tbl_data_warga SET NIK_tdw = '$NIK', nama_lengkap_tdw = '$NAMA', jenis_kelamin_tdw = '$JK', tempat_lahir_tdw = '$TEMPATLAHIR', tanggal_lahir_tdw = '$TANGGALLAHIR', alamat_tdw = '$ALAMAT', provinsi_tdw = '$PROVINSI', kabupaten_kota_tdw = '$KABUPATEN', kecamatan_tdw = '$KECAMATAN', dusun_tdw = '$DUSUN', kewarganegaraan_tdw = '$KEWARGANEGARAAN', agama_tdw = '$AGAMA', pendidikan_terakhir_tdw = '$PENDIDIKAN', pekerjaan_tdw = '$PEKERJAAN', status_perkawinan_tdw = '$STATUSPERKAWINAN', status_hubungan_tdw = '$STATUSHUBUNGAN', nama_ayah_tdw = '$NAMAAYAH', nama_ibu_tdw = '$NAMAIBU', update_at_tdw = '$update_at_tdw' WHERE id_tdw ='$id'");

    echo "<div align='center'><h5> ~ Data berhasil di update ~ <h5></div>";
    echo "<meta http-equiv= 'refresh' content='1;url=http://localhost/FinalProjectDp/pages/content/pendataan_warga/datawargadesa.php'>";

    // $ResultQueryTambahData = mysqli_query($mysqli, $QueryTambahData);



?>