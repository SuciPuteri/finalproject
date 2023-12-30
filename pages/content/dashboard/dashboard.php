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
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


    <section class="section dashboard">
    <div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Pengajuan Surat</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="../pengajuan_surat/data_pengajuan_surat" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Berita</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="../berita/berita" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-sm-6">
      <div class="card mx-auto text-center">
        <div class="card-body">
          <h5 class="card-title">Pendataan</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="../pendataan_warga/datawargadesa" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>
</div>
      </div>
    </section>

  </main><!-- End #main -->

<?php
  require_once("{$base_dir}pages{$ds}core{$ds}footer.php");
?>