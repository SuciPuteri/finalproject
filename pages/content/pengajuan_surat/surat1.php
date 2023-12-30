<?php
  session_start();

  if( !isset($_SESSION["login"]) ) {
    echo "<meta http-equiv='refresh' content='1;url=http://localhost/finalprojectdp/login'>";
    die;
  }

  $ds = DIRECTORY_SEPARATOR;
  $base_dir = realpath(dirname(__FILE__) . $ds .".." . $ds .".." . $ds ."..") . $ds;
  require_once("{$base_dir}pages{$ds}core{$ds}header.php");
?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Surat Kematian</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
        <li class="breadcrumb-item"><a href="data_pengajuan_surat.php">Data Pengajuan Surat</a></li>
        <li class="breadcrumb-item active">Surat Kematian</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row justify-content-center"><!-- Use Bootstrap utility class to center the content -->
      <div class="col-sm-3 mb-3 mb-sm-0 card-link text-center"><!-- Center the card content -->
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Surat</h5>
          </div>
        </div>
        <p class="card-name">Nama Surat</p><!-- Add this line to display the name of the surat below the card -->
      </div>
    </div>
  </section>

</main><!-- End #main -->

<?php
  require_once("{$base_dir}pages{$ds}core{$ds}footer.php");
?>
