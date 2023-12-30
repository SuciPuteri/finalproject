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
        Tambah Data Pegawai
      </div>
      <div class="card-body">
        <form action="./../../../backend/data_pegawai/tambah_data_pegawai.php" method="POST">
        <div class="mb-3 row">
            <label for="idpegawai" class="col-sm-4 col-form-label">ID Pegawai</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="idpegawai" name="idpegawai" >
            </div>
          </div>
          <div class="mb-3 row">
            <label for="nikpegawai" class="col-sm-4 col-form-label">NIK Pegawai</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="nikpegawai" name="nikpegawai" >
            </div>
          </div>
          <div class="mb-3 row">
            <label for="nama" class="col-sm-4 col-form-label">Nama Lengkap</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="nama" name="nama">
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
            <label for="password" class="col-sm-4 col-form-label">Password</label>
            <div class="col-sm-12">
              <input type="password" class="form-control" id="password" name="password" >
            </div>
          </div>
          <div class="mb-3 row">
            <label for="jabatan" class="col-sm-4 col-form-label">Jabatan</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="jabatan" name="jabatan" >
            </div>
          </div>
          <div class="mb-3 row">
            <label for="masajabatan" class="col-sm-4 col-form-label">Masa Jabatan</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="masajabatan" name="masajabatan" placeholder="co. 2020-2025" >
            </div>
          </div>
          <div class="mb-3 row">
            <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id=alamat" name="alamat" >
            </div>
          </div>
          <div class="mb-3 row">
            <label for="nohp" class="col-sm-4 col-form-label">No Telepon</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id=nohp" name="nohp">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="email" class="col-sm-4 col-form-label">Email</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id=email" name="email" >
            </div>
          </div>
          <div class="col-6">
            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            <a href="..\pendataan_pegawai\datapegawaidesa" type="cancel" name="cancel" class="btn btn-primary">Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>

