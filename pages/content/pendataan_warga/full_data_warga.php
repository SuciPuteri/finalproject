<?php
  session_start();

  if( !isset($_SESSION["login"]) ) {
    echo "<meta http-equiv= 'refresh' content='1;url=http://localhost/finalprojectdp/login'>";
    die;
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Detail Data Warga Desa</title>
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
        Detail Data Warga
      </div>
      <div class="card-body">
        <?php
          require './../../core/connection.php';
          $id = $_GET['idwarga'];
          $ambilData = mysqli_query($mysqli, "SELECT * FROM tbl_data_warga WHERE id_tdw ='$id' ");
          $data = mysqli_fetch_array($ambilData);
        ?>
        <form action="#" method="POST">
          
          <div class="mb-3 row">
            <label for="nik" class="col-sm-4 col-form-label">NIK</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nik" name="nik" value="<?php echo $data['NIK_tdw'];?>" readonly>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="nama" class="col-sm-4 col-form-label">Nama Lengkap</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama_lengkap_tdw'];?>" readonly>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="tempatlahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" value="<?php echo $data['tempat_lahir_tdw'];?>" readonly>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="tanggallahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-8">
              <input type="date" class="form-control" id="tanggallahir" name="tanggallahir" value="<?php echo $data['tanggal_lahir_tdw'];?>" readonly>
            </div>
          </div>
          <div class="mb-3 row">
              <label for="jeniskelamin" class="col-sm-4 col-form-label">Jenis Kelamin</label>
              <div class="col-sm-8">
                  <select class="form-control" id="jeniskelamin" name="jeniskelamin" disabled style="background-color: transparent;">
                      <option value="">-- Pilih Jenis Kelamin --</option>
                      <option value="Laki-laki" <?php echo ($data['jenis_kelamin_tdw'] == 'LAKI-LAKI') ? 'selected' : ''; ?>>Laki-laki</option>
                      <option value="Perempuan" <?php echo ($data['jenis_kelamin_tdw'] == 'PEREMPUAN') ? 'selected' : ''; ?>>Perempuan</option>
                  </select>
              </div>
          </div>
          <div class="mb-3 row">
            <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id=alamat" name="alamat" value="<?php echo $data['alamat_tdw'];?>" readonly>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="provinsi" class="col-sm-4 col-form-label">Provinsi</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id=provinsi" name="provinsi" value="<?php echo $data['provinsi_tdw'];?>" readonly>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="kabupaten" class="col-sm-4 col-form-label">Kabupaten/Kota</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id=kabupaten" name="kabupaten" value="<?php echo $data['kabupaten_kota_tdw'];?>" readonly>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="kecamatan" class="col-sm-4 col-form-label">kecamatan</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id=kecamatan" name="kecamatan" value="<?php echo $data['kecamatan_tdw'];?>" readonly>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="dusun" class="col-sm-4 col-form-label">Dusun</label>
            <div class="col-sm-8">
              <select class="form-control" id="dusun" name="dusun" disabled style="background-color: transparent;">
                <option value="">-- Pilih Dusun --</option>
                <option value="Dusun 1" <?php echo ($data['dusun_tdw'] == 'Dusun 1') ? 'selected' : ''; ?>>Dusun 1</option>
                <option value="Dusun 2" <?php echo ($data['dusun_tdw'] == 'Dusun 2') ? 'selected' : ''; ?>>Dusun 2</option>
                <option value="Dusun 3" <?php echo ($data['dusun_tdw'] == 'Dusun 3') ? 'selected' : ''; ?>>Dusun 3</option>
                <option value="Dusun 4" <?php echo ($data['dusun_tdw'] == 'Dusun 4') ? 'selected' : ''; ?>>Dusun 4</option>
              </select>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="kewarganegaraan" class="col-sm-4 col-form-label">Kewarganegaraan</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id=kewarganegaraan" name="kewarganegaraan" value="<?php echo $data['kewarganegaraan_tdw'];?>" readonly>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="agama" class="col-sm-4 col-form-label">Agama</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id=agama" name="agama" value="<?php echo $data['agama_tdw'];?>" readonly>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="pendidikan" class="col-sm-4 col-form-label">Pendidikan</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id=pendidikan" name="pendidikan" value="<?php echo $data['pendidikan_terakhir_tdw'];?>" readonly>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="pekerjaan" class="col-sm-4 col-form-label">Pekerjaan</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id=pekerjaan" name="pekerjaan" value="<?php echo $data['pekerjaan_tdw'];?>" readonly>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="statusperkawinan" class="col-sm-4 col-form-label">Status Perkawinan</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id=statusperkawinan" name="statusperkawinan" value="<?php echo $data['status_perkawinan_tdw'];?>" readonly>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="statushubungan" class="col-sm-4 col-form-label">Status Hubungan Dalam Keluarga</label>
            <div class="col-sm-8">
              <select class="form-control" id="statushubungan" name="statushubungan" disabled style="background-color: transparent;">
                <option value="">-- Pilih Status Hubungan --</option>
                <option value="Kepala Keluarga" <?php echo ($data['status_hubungan_tdw'] == 'Kepala Keluarga') ? 'selected' : ''; ?>>Kepala Keluarga</option>
                <option value="Suami" <?php echo ($data['status_hubungan_tdw'] == 'Suami') ? 'selected' : ''; ?>>Suami</option>
                <option value="Istri" <?php echo ($data['status_hubungan_tdw'] == 'Istri') ? 'selected' : ''; ?>>Istri</option>
                <option value="Anak" <?php echo ($data['status_hubungan_tdw'] == 'Anak') ? 'selected' : ''; ?>>Anak</option>
              </select>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="namaayah" class="col-sm-4 col-form-label">Nama Ayah</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id=namaayah" name="namaayah" value="<?php echo $data['nama_ayah_tdw'];?>" readonly>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="namaibu" class="col-sm-4 col-form-label">Nama Ibu</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id=namaibu" name="namaibu" value="<?php echo $data['nama_ibu_tdw'];?>" readonly>
            </div>
          </div>

          <div class="col-8">
            <a href="datawargadesa" class="btn btn-outline-primary" style="font-size: 12px;">Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>
