<?php
session_start();

    if( isset($_SESSION["login"]) ) {
    echo "<meta http-equiv= 'refresh' content='1;url=http://localhost/finalprojectDp/pages/content/dashboard/dashboard.php'>";
    die;
    }

require './../pages/core/connection.php';

if(isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $tbl_data_pegawai = mysqli_query($mysqli,"SELECT * FROM tbl_data_pegawai WHERE id_pegawai_tdp = '$username'");
    if(mysqli_num_rows($tbl_data_pegawai) > 0) {
        $data = mysqli_fetch_assoc($tbl_data_pegawai);
        

        if (!password_verify($password, $data['password_tdp'])) {
            echo "Password yang Anda masukkan salah";
            // tambahkan aksi lain jika perlu
            die;
        
        w

        // if(password_verify($password,$data['Password_tl'])) {
            // echo "selamat datang ".$data['Nama_Lengkap_tl'];
            // echo "<meta http-equiv= 'refresh' content='1;url=http://localhost/FinalProject/finalproject/dasboard.php'>";
            // die;
        

        } else {
            //set session
            $_SESSION["login"] = true;

            echo "<div align='center'><h5> ~ Selamat datang " . $data['nama_lengkap_tdp'] . " ~ <h5></div>"; 
            echo "<meta http-equiv= 'refresh' content='1;url=http://localhost/finalprojectDp/pages/content/dashboard/dashboard.php'>";
            die;
        }
        

    } else {
        echo "<script>
        alert('Username Dan Password Salah');
        window.location.href = '../login';
        </script>";
        die;
    }
}
?>