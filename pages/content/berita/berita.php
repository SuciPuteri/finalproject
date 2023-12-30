<?php

session_start();

if( !isset($_SESSION["login"]) ) {
  echo "<meta http-equiv= 'refresh' content='1;url=http://localhost/finalprojectdp/login'>";
  die;
}

$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__) . $ds .".." . $ds .".." . $ds ."..") . $ds;
require_once("{$base_dir}pages{$ds}core{$ds}header.php");
require_once("{$base_dir}backend{$ds}berita{$ds}berita.php");

?>

<style>
  .card-img-top {
    max-width: 100%;
    height: auto;
  }
</style>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Berita</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
        <li class="breadcrumb-item active">Berita</li>
      </ol>
    </nav>
    <p>
      <a href="create_berita" style="font-size: 12px;" type="button" class="btn btn-outline-primary"><i class="bi bi-person-fill-add"></i>Tambah Berita</a>
    </p>
  </div><!-- End Page Title -->

  <section class="section berita">
    <div class="row">

    <?php
    while ($news = mysqli_fetch_assoc($QueryGetDataBerita)) { 
        $summary = $news['isi_tb'];
        // Truncate the content to 1000 characters
        $summary = substr($summary, 0, 1000);
        // Add an ellipsis (...) if the content is truncated
        if (strlen($news['isi_tb']) > 1000) {
            $summary .= '  ...';
        }
        ?>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $news['judul_tb']; ?></h5>
                    <p class="card-text"><?php echo $summary; ?></p>

                    <a href="<?php echo $news['link_tb'] . '&page=' . $page; ?>" class="btn btn-outline-secondary" style="font-size: 10px;">Baca Selengkapnya</a>
                    
                    <a href= "edit_berita.php?idberita=<?=$news['id_tb'];?>" class="btn btn-outline-success" style="font-size: 10px;">Edit</a>
                    <a href= "./../../../backend/berita/hapus_berita.php?idberita=<?=$news['id_tb'];?>" class="btn btn-outline-danger " style="font-size: 10px;">Hapus</a>
                </div>
            </div>
        </div>
    <?php
    }
    ?>

    </div>
  </section>

</main><!-- End #main -->

<?php
require_once("{$base_dir}pages{$ds}core{$ds}footer.php");
?>
