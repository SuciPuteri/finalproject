<?php



  $ds = DIRECTORY_SEPARATOR;
  $base_dir = realpath(dirname(__FILE__) . $ds .".." . $ds .".." . $ds ."..") . $ds;
  require_once("{$base_dir}pages{$ds}core{$ds}header.php");
  require_once("{$base_dir}backend{$ds}data_pegawai{$ds}data_pegawai.php");

  
?>
  
  <main id="main" class="main" style="font-size: 10px;">

    <div class="pagetitle">
      <h1>Data Pegawai</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Data Pegawai</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body" >
              <h5 class="card-title">Tabel Data Pegawai</h5>
              <p>
                <a href="tambah_data_pegawai" style="font-size: 10px;" type="button" class="btn btn-outline-primary"><i class="bi bi-person-fill-add"></i>Tambah Data Pegawai</a>
              </p>

              <!-- Table with stripped rows -->
              <table class="table datatable" style="font-size: 10px;">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID Peagawai</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Password</th>
                    <th scope="col">Pilihan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $no = 0;
                    while($row=mysqli_fetch_array($QueryGetDataPegawai)){
                      $no++;
                      echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$row['id_pegawai_tdp']."</td>";
                        echo "<td>".$row['NIK_tdp']."</td>";
                        echo "<td>".$row['nama_lengkap_tdp']."</td>";
                        echo "<td>".$row['jenis_kelamin_tdp']."</td>";
                        echo "<td>".$row['jabatan_tdp']."</td>";
                        echo "<td>".$row['password_tdp']."</td>";
                  ?> 
                    <td>
                        <a href="full_data_pegawai.php?idpegawai=<?=$row['id_tdp'];?>" class="btn btn-outline-secondary" style="font-size: 10px;"><i class="bi bi-three-dots"></i></a>
                        <a href="edit_data_pegawai.php?idpegawai=<?=$row['id_tdp'];?>" class="btn btn-outline-success" style="font-size: 10px;"><i class="bi bi-pencil-square"></i></a>
                        <a href="./../../../backend/data_pegawai/hapus_data_pegawai.php?idpegawai=<?=$row['id_tdp'];?>" class="btn btn-outline-danger" style="font-size: 10px;"><i class="bi bi-trash3"></i></a>
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