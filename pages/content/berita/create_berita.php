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
      <h1>Create berita</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../dashboard/dashboard.php">Home</a></li>
          <li class="breadcrumb-item"><a href="../berita/berita">Berita</a></li>
          <li class="breadcrumb-item active">Create Berita</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body" >
              <h5 class="card-title">Create Berita</h5>

              <form action="./../../../backend/berita/create_berita.php" method="post" enctype="multipart/form-data">
              
              <div class="form-floating">
                  <input name="judul" class="form-control" id="judul_berita" >
                  <label for="floatingjudul">Judul Berita :</label>
              </div><br>
              <div class="form-floating">
                  <textarea class="form-control" name="isi" id="floatingTextarea2" style="height: 100px"></textarea>
                  <label for="floatingTextarea2">Ringkasan :</label>
              </div><br>
              <div class="form-floating">
                  <input name="link" class="form-control" id="news_link" >
                  <label for="floatingPassword">Link :</label>
              </div><br>
              <div class="col-6">
                  <button type="submit" name="submit" class="btn btn-outline-success" style="font-size: 10px;">Simpan</button>
                  <a href="..\berita\berita" type="cancel" name="cancel" class="btn btn-outline-primary" style="font-size: 10px;">Cancel</a>
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