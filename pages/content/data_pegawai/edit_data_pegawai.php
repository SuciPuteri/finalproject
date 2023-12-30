

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Detail Data Pegawai</title>
  <style>
    .mx-auto {
      width: 800px
    }

    .card {
      margin-top: 10px
    }
  </style>
</head>

<body>
  <div class="mx-auto">
    <div class="card">
      <div class="card-header">
        Detail Data Pegawai
      </div>
      <div class="card-body">
        <?php
          require './../../core/connection.php';
          $id = $_GET['idpegawai'];
          $ambilData = mysqli_query($mysqli, "SELECT * FROM tbl_data_pegawai WHERE id_tdp ='$id' ");
          $data = mysqli_fetch_array($ambilData);
        ?>
        <form action="./../../../backend/data_pegawai/edit_data_pegawai.php?idpegawai=<?php echo $id; ?>" method="POST">

          <div class="mb-3 row">
            <label for="idpegawai" class="col-sm-4 col-form-label">ID Pegawai</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="idpegawai" name="idpegawai" value="<?php echo $data['id_pegawai_tdp'];?>" >
            </div>
          </div>
          <div class="mb-3 row">
            <label for="nikpegawai" class="col-sm-4 col-form-label">NIK</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nikpegawai" name="nikpegawai" value="<?php echo $data['NIK_tdp'];?>" >
            </div>
          </div>
          <div class="mb-3 row">
            <label for="nama" class="col-sm-4 col-form-label">Nama Lengkap</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama_lengkap_tdp'];?>" >
            </div>
          </div>
          <div class="mb-3 row">
              <label for="jeniskelamin" class="col-sm-4 col-form-label">Jenis Kelamin</label>
              <div class="col-sm-8">
                  <select class="form-control" id="jeniskelamin" name="jeniskelamin" >
                      <option value="">-- Pilih Jenis Kelamin --</option>
                      <option value="Laki-laki" <?php echo ($data['jenis_kelamin_tdp'] == 'LAKI-LAKI') ? 'selected' : ''; ?>>Laki-Laki</option>
                      <option value="Perempuan" <?php echo ($data['jenis_kelamin_tdp'] == 'PEREMPUAN') ? 'selected' : ''; ?>>Perempuan</option>
                  </select>
              </div>
          </div>
          <div class="mb-3 row">
            <label for="jabatan" class="col-sm-4 col-form-label">Jabatan</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?php echo $data['jabatan_tdp'];?>" >
            </div>
          </div>          
          <div class="mb-3 row">
            <label for="masajabatan" class="col-sm-4 col-form-label">Masa Jabatan</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="masajabatan" name="masajabatan" value="<?php echo $data['masa_jabatan_tdp'];?>" >
            </div>
          </div>          
          <div class="mb-3 row">
            <label for="nohp" class="col-sm-4 col-form-label">No Telepon</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nohp" name="nohp" value="<?php echo $data['no_hp_tdp'];?>" >
            </div>
          </div>          
          <div class="mb-3 row">
            <label for="email" class="col-sm-4 col-form-label">Email</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="email" name="email" value="<?php echo $data['email_tdp'];?>" >
            </div>
          </div>          
          <div class="mb-3 row">
            <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data['alamat_tdp'];?>" >
            </div>
          </div>          
          <div class="mb-3 row">
            <label for="password" class="col-sm-4 col-form-label">Password</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="password" name="password" value="<?php echo $data['password_tdp'];?>" >
            </div>
          </div>

          <div class="col-6">
            <button type="submit" name="submit" class="btn btn-outline-success"">Simpan</button>
            <a href="..\data_pegawai\datapegawai" type="cancel" name="cancel" class="btn btn-outline-primary"">Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>
