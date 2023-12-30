<?php

require './../../pages/core/connection.php';

    if(isset($_POST['submit'])){

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


        
        $usedID = mysqli_query($mysqli,"SELECT id_pegawai_tdp FROM tbl_data_pegawai WHERE id_pegawai_tdp = '$ID'");
        if(mysqli_num_rows($usedID) > 0) {
            echo "<div align='center'><h5> ~ ID sudah digunakan ~ <h5></div>";
            echo "<meta http-equiv= 'refresh' content='1;url=http://localhost/FinalProjectdp/pages/content/data_pegawai/datapegawai'>";
    
            die;
        }

        $PASSWORD = password_hash($PASSWORD,PASSWORD_DEFAULT);
        $created_at_tdp = date('y-m-d H:i:s', time());


        $QueryTambahData = mysqli_query($mysqli,"INSERT INTO tbl_data_pegawai (id_pegawai_tdp, NIK_tdp,nama_lengkap_tdp, jenis_kelamin_tdp, jabatan_tdp, masa_jabatan_tdp, alamat_tdp, password_tdp, no_hp_tdp, email_tdp, created_at_tdp) VALUES
                            ('$ID', '$NIK','$NAMA','$JK','$JABATAN','$MASAJABATAN','$ALAMAT', '$PASSWORD','$NOTELEPON','$EMAIL','$created_at_tdp')");
        echo "<div align='center'><h5> ~ Data berhasil diinputkan ~ <h5></div>";
        echo "<meta http-equiv= 'refresh' content='1;url=http://localhost/FinalProjectdp/pages/content/data_pegawai/datapegawai'>";

        // $ResultQueryTambahData = mysqli_query($mysqli, $QueryTambahData);
    
    }
    

?>