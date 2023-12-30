<?php

require './../../pages/core/connection.php';

    if(isset($_POST['submit'])){

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


        $usedNIK = mysqli_query($mysqli,"SELECT NIK_tdw FROM tbl_data_warga WHERE NIK_tdw = '$NIK'");
        if(mysqli_num_rows($usedNIK) > 0) {
            echo "NIK sudah digunakan";
            echo "<meta http-equiv= 'refresh' content='1;url=http://localhost/FinalProjectDp/pages/content/pendataan_warga/datawargadesa.php'>";
    
            die;
        }

        $created_at_tdw = date('y-m-d H:i:s', time());


        //Tambah Data Warga
        $QueryTambahData = mysqli_query($mysqli,"INSERT INTO tbl_data_warga (NIK_tdw, nama_lengkap_tdw, jenis_kelamin_tdw, tempat_lahir_tdw, tanggal_lahir_tdw, alamat_tdw, provinsi_tdw, kabupaten_kota_tdw, kecamatan_tdw, dusun_tdw, kewarganegaraan_tdw, agama_tdw, pendidikan_terakhir_tdw, pekerjaan_tdw, status_perkawinan_tdw, status_hubungan_tdw, nama_ayah_tdw, nama_ibu_tdw, created_at_tdw) VALUES
                            ('$NIK','$NAMA','$JK','$TEMPATLAHIR','$TANGGALLAHIR','$ALAMAT','$PROVINSI','$KABUPATEN','$KECAMATAN','$DUSUN','$KEWARGANEGARAAN','$AGAMA','$PENDIDIKAN','$PEKERJAAN','$STATUSPERKAWINAN','$STATUSHUBUNGAN','$NAMAAYAH','$NAMAIBU','$created_at_tdw')");
        echo "<div align='center'><h5> ~ Data berhasil diinputkan ~ <h5></div>";
        echo "<meta http-equiv= 'refresh' content='1;url=http://localhost/FinalProjectDp/pages/content/pendataan_warga/datawargadesa.php'>";

        // $ResultQueryTambahData = mysqli_query($mysqli, $QueryTambahData);

    }
    

?>