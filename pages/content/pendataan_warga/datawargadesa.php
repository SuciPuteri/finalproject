<?php

  session_start();

  if( !isset($_SESSION["login"]) ) {
    echo "<meta http-equiv= 'refresh' content='1;url=http://localhost/finalprojectdp/login'>";
    die;
  }

  $ds = DIRECTORY_SEPARATOR;
  $base_dir = realpath(dirname(__FILE__) . $ds .".." . $ds .".." . $ds ."..") . $ds;
  require_once("{$base_dir}pages{$ds}core{$ds}header.php");
  require_once("{$base_dir}backend{$ds}pendataan_warga{$ds}data_warga.php");

  
?>
  
  <main id="main" class="main" style="font-size: 12px;">

    <div class="pagetitle">
      <h1>Data Warga</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Data Warga</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body" >
              <h5 class="card-title">Tabel Data Warga</h5>
              <p>
                <a href="tambah_data_warga" style="font-size: 12px;" type="button" class="btn btn-outline-primary"><i class="bi bi-person-fill-add"></i>Tambah Data Warga</a>
              </p>

              <!-- Table with stripped rows -->
              <table class="table datatable" style="font-size: 12px;">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Dusun</th>
                    <th scope="col">Nama Ibu</th>
                    <th scope="col">Pilihan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $no = 0;
                    while($row=mysqli_fetch_array($QueryGetDataWarga)){
                      $no++;
                      echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$row['NIK_tdw']."</td>";
                        echo "<td>".$row['nama_lengkap_tdw']."</td>";
                        echo "<td>".$row['jenis_kelamin_tdw']."</td>";
                        echo "<td>".$row['dusun_tdw']."</td>";
                        echo "<td>".$row['nama_ibu_tdw']."</td>";
                  ?> 
                    <td>
                        <a href="edit_data_warga.php?idwarga=<?=$row['id_tdw'];?>" class="btn btn-outline-success" style="font-size: 12px;" >Edit </a>
                        <a href="./../../../backend/pendataan_warga/hapus_data_warga.php?idwarga=<?=$row['id_tdw'];?>" class="btn btn-outline-danger" style="font-size: 12px;">Hapus</a>
                        <a href="full_data_warga.php?idwarga=<?=$row['id_tdw'];?>" class="btn btn-outline-secondary" style="font-size: 12px;">See More</a>
                    </td>
                  <?php
                      echo "</tr>";
                    }
                  ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->


<?php
  require_once("{$base_dir}pages{$ds}core{$ds}footer.php");
?> 