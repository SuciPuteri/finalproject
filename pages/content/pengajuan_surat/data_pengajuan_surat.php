<?php
  session_start();

  if( !isset($_SESSION["login"]) ) {
    echo "<meta http-equiv= 'refresh' content='1;url=http://localhost/finalprojectdp/login'>";
    die;
  }

  $ds = DIRECTORY_SEPARATOR;
  $base_dir = realpath(dirname(__FILE__) . $ds .".." . $ds .".." . $ds ."..") . $ds;
  require_once("{$base_dir}pages{$ds}core{$ds}header.php");
?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Data Pengajuan Surat</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
        <li class="breadcrumb-item active">Data Pengajuan Surat</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row justify-content-center">

      <a href="surat1.php" class="col-sm-3 mb-3 mb-sm-0 card-link">
        <div class="card mx-auto">
          <div class="card-body d-flex align-items-center justify-content-center" >
            <h5 class="card-title">Judul Surat</h5>
          </div>
        </div>
      </a>

      <a href="halaman_dua.php" class="col-sm-3 mb-3 mb-sm-0 card-link">
        <div class="card mx-auto">
          <div class="card-body d-flex align-items-center justify-content-center">
            <h5 class="card-title">Judul Surat</h5>
          </div>
        </div>
      </a>

      <a href="halaman_dua.php" class="col-sm-3 mb-3 mb-sm-0 card-link">
        <div class="card mx-auto">
          <div class="card-body d-flex align-items-center justify-content-center">
            <h5 class="card-title">Judul Surat</h5>
          </div>
        </div>
      </a>

      <a href="halaman_tiga.php" class="col-sm-3 mb-3 mb-sm-0 card-link">
        <div class="card mx-auto">
          <div class="card-body d-flex align-items-center justify-content-center">
            <h5 class="card-title">Judul Surat</h5>
          </div>
        </div>
      </a>

      <a href="halaman_empat.php" class="col-sm-3 mb-3 mb-sm-0 card-link">
        <div class="card mx-auto">
          <div class="card-body d-flex align-items-center justify-content-center">
            <h5 class="card-title">Judul Surat</h5>
          </div>
        </div>
      </a>

    </div>
  </section>

</main><!-- End #main -->

<?php
  require_once("{$base_dir}pages{$ds}core{$ds}footer.php");
?>
