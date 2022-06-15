<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Mahasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form Mahasiswa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"> Form Mahasiswa</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <?php echo form_open('matakuliah/create');?>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Matakuliah</label> 
    <div class="col-8">
      <select id="nama" name="nama" class="custom-select">
         <option value="">Choose matkul</option>
        <option value="Pemograman Web 2">Pemograman Web 2</option>
        <option value="Jaringan Komputer">Jaringan Komputer</option>
        <option value="Basis Data">Basis Data</option>
        <option value="Statistik Probabilitas">Statistik Probabilitas</option>
        <option value="PPKn">PPKn</option>
        <option value="Bahasa Inggris">Bahasa Inggris</option>
        <option value="User Interface & User Experience">User Interface & User Experience</option>
        <option value="Komunikasi Efektif">Komunikasi Efektif</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="sks" class="col-4 col-form-label">SKS</label> 
    <div class="col-8">
      <select id="sks" name="sks" class="custom-select">
        <option value="">-Pilih SKS Matakuliah-</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <select id="kode" name="kode" class="custom-select">
        <option value="">Sesuai dengan matkul di kode matkul yang di pilih</option>
        <option value="PW">PW2</option>
        <option value="JARKOM">Jarkom</option>
        <option value="BASDAT">Basdat</option>
        <option value="STAPRO">StaPro</option>
        <option value="PKN">PKn</option>
        <option value="B-ING">B.Ing</option>
        <option value="UI/UX">UI/UX</option>
        <option value="KE">KomEf</option>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
<?php echo form_close();?>
<h3>Matakuliah yang dipilih</h3>
    <table class="table">
    <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama</th>
      <th scope="col">SKS</th>
      <th scope="col">Kode</th>
    </tr>
    </thead>
    <tbody>
        <?php
            $nomor = 1;
            echo'<tr><td>'.$nomor.'</td>';
            echo'<td>'.$matkul9 -> nama.'</td>';
            echo'<td>'.$matkul9 -> sks.'</td>';
            echo'<td>'.$matkul9 -> kode.'</td></tr>';
        ?>
    </tbody>
    </table>
    </div>
        <!-- /.card-body -->
        <div class="card-footer">
        Develop by Irfan Mahasiswa STT NF @2022
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</body>
</html>