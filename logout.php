<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();


echo "<meta http-equiv= 'refresh' content='1;url=http://localhost/finalprojectdp/login'>";
die;

?>