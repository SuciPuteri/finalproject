<?php
$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__)) . $ds;
require_once("pengajuan_surat.php");
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <div class="alert alert-primary text-center" role="alert" style="width: 100%; margin: auto; background-color: #37517e;">
        <h3 style="color: #fff;">Selamat Datang Di Halaman Pengajuan Surat</h3>
        <nav aria-label="breadcrumb" style="padding-left: 30px;" >
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php" style="color: #fff;">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pengajuan Surat</li>
            </ol>
        </nav>
    </div>


<?php
require_once("pengajuan_surat.php");
?>
