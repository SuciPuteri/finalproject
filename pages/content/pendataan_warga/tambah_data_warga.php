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
  <title>Data Warga Desa</title>
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
        Tambah Data Warga
      </div>
      <div class="card-body">
        <form action="./../../../backend/pendataan_warga/tambah_data_warga.php" method="POST">
          <div class="mb-3 row">
            <label for="nik" class="col-sm-4 col-form-label">NIK</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="nik" name="nik" >
            </div>
          </div>
          <div class="mb-3 row">
            <label for="nama" class="col-sm-4 col-form-label">Nama Lengkap</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="nama" name="nama">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="tempatlahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" >
            </div>
          </div>
          <div class="mb-3 row">
            <label for="tanggallahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-12">
              <input type="date" class="form-control" id="tanggallahir" name="tanggallahir" >
            </div>
          </div>
          <div class="mb-3 row">
            <label for="jeniskelamin" class="col-sm-4 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-12">
              <select class="form-control" id="jeniskelamin" name="jeniskelamin">
              <option value="">-- Pilih Jenis Kelamin --</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan" >Perempuan</option>
              </select>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id=alamat" name="alamat" >
            </div>
          </div>
          <div class="mb-3 row">
            <label for="provinsi" class="col-sm-4 col-form-label">Provinsi</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id=provinsi" name="provinsi">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="kabupaten" class="col-sm-4 col-form-label">Kabupaten/Kota</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id=kabupaten" name="kabupaten" >
            </div>
          </div>
          <div class="mb-3 row">
            <label for="kecamatan" class="col-sm-4 col-form-label">kecamatan</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id=kecamatan" name="kecamatan">
            </div>
          </div>
          <div class="mb-3 row">
          <div class="mb-3 row">
            <label for="dusun" class="col-sm-4 col-form-label">Dusun</label>
            <div class="col-sm-12">
              <select class="form-control" id="dusun" name="dusun">
              <option value="">-- Pilih Dusun --</option>
                <option value="Dusun 1" >Dusun 1</option>
                <option value="Dusun 2" >Dusun 2</option>
                <option value="Dusun 3" >Dusun 3</option>
                <option value="Dusun 4" >Dusun 4</option>
              </select>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="kewarganegaraan" class="col-sm-4 col-form-label">Kewarganegaraan</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id=kewarganegaraan" name="kewarganegaraan" ">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="agama" class="col-sm-4 col-form-label">Agama</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id=agama" name="agama" ">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="pendidikan" class="col-sm-4 col-form-label">Pendidikan</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id=pendidikan" name="pendidikan" ">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="pekerjaan" class="col-sm-4 col-form-label">Pekerjaan</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id=pekerjaan" name="pekerjaan" ">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="statusperkawinan" class="col-sm-4 col-form-label">Status Perkawinan</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id=statusperkawinan" name="statusperkawinan" ">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="statushubungan" class="col-sm-4 col-form-label">Status Hubungan Dalam Keluarga</label>
            <div class="col-sm-12">
              <select class="form-control" id="statushubungan" name="statushubungan">
              <option value="">-- Pilih Status Hubungan --</option>
                <option value="Kepala Keluarga" >Kepala Keluarga</option>
                <option value="Suami" >Suami</option>
                <option value="Istri" >Istri</option>
                <option value="Anak" >Anak</option>
              </select>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="namaayah" class="col-sm-4 col-form-label">Nama Ayah</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id=namaayah" name="namaayah" ">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="namaibu" class="col-sm-4 col-form-label">Nama Ibu</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id=namaibu" name="namaibu" ">
            </div>
          </div>

          <div class="col-6">
            <button type="submit" name="submit" class="btn btn-outline-success">Simpan</button>
            <a href="..\pendataan_warga\datawargadesa" type="cancel" name="cancel" class="btn btn-outline-primary">Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>

