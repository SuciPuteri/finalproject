<?php
date_default_timezone_set('Asia/Jakarta');

$DBHOST = 'localhost';
$DBUSER = 'root';
$DBPASSWORD = '';
$DBNAME = 'desa_db';


$mysqli = mysqli_connect($DBHOST,$DBUSER,$DBPASSWORD,$DBNAME);


if(mysqli_connect_errno()){
    echo "failed connect to mysql ".mysqli_connect_error(); 
}
?>
