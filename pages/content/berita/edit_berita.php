<?php

session_start();

if (!isset($_SESSION["login"])) {
  echo "<meta http-equiv= 'refresh' content='1;url=http://localhost/finalprojectdp/login'>";
  die;
}

$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__) . $ds . ".." . $ds . ".." . $ds . "..") . $ds;
require_once("{$base_dir}pages{$ds}core{$ds}header.php");

?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Edit berita</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../dashboard/dashboard.php">Home</a></li>
        <li class="breadcrumb-item"><a href="../berita/berita.php">Berita</a></li>
        <li class="breadcrumb-item active">Edit Berita</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <?php
            require './../../core/connection.php';
            $id = $_GET['idberita'];
            $ambilData = mysqli_query($mysqli, "SELECT * FROM tbl_berita WHERE id_tb ='$id' ");
            $data = mysqli_fetch_array($ambilData);
            ?>

            <!-- ... -->

            <form action="./../../../backend/berita/edit_berita.php" method="post" enctype="multipart/form-data">

              <div class="form-floating">
                <textarea class="form-control" name="judul" id="floatingTextarea2" style="height: 50px"><?php echo $data['judul_tb']; ?></textarea>
                <label for="floatingTextarea2">Judul :</label>
              </div><br>
              <div class="form-floating">
                <textarea class="form-control" name="isi" id="floatingTextarea2" style="height: 100px"><?php echo $data['isi_tb']; ?></textarea>
                <label for="floatingTextarea2">Ringkasan :</label>
              </div><br>
              <div class="form-floating">
                <textarea class="form-control" name="link" id="floatingTextarea2" style="height: 50px"><?php echo $data['link_tb']; ?></textarea>
                <label for="floatingTextarea2">Link :</label>
              </div><br>

              <div class="col-6">
                <button type="submit" name="submit" class="btn btn-outline-success" style="font-size: 10px;">Simpan</button>
                <a href="..\berita\berita" type="cancel" name="cancel" class="btn btn-outline-primary" style="font-size: 10px;">Cancel</a>
              </div>
            </form>

            <!-- ... -->


          </div>

        </div>
      </div>
    </div>
  </section>

</main><!-- End #main -->

<?php
require_once("{$base_dir}pages{$ds}core{$ds}footer.php");
?>
