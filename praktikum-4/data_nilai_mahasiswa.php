<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container card ">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">WEB02</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Review PHP
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          PHP5 OOP
        </a>
      </li>
    </ul>
    <form class="form-inline col-9 my-lg-1">
      <input class="form-control mr-sm-2" type="search" placeholder="" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Submit</button>
    </form>
  </div>
</nav>
<br>
<div>
<h5> Form Nilai Ujian </h5>
</div>
<hr>
<br>
<form method="POST" action="" style = "margin-left : 30%;">
  <div class="form-group row">
    <label for="nim" class="col-2 col-form-label">NIM</label> 
    <div class="col-5">
      <input id="nim" name="nim" placeholder="295561" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-2 col-form-label">Pilihi MK</label> 
    <div class="col-5">
      <select id="matkul" name="matkul" class="custom-select" aria-describedby="matkul">
        <option value="DW">Data Warehouse</option>
        <option value="DW">Data</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai" class="col-2 col-form-label">Nilai</label> 
    <div class="col-5">
      <input id="nilai" name="nilai" placeholder="90" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-2 col-7">
      <button name="proses" value="Simpan" type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>
<br>
<br>
<hr>

<?php
include_once "class_nilai_mahasiswa.php";

$data_siswa = new NilaiMahasiswa (90, "Data Warehouse", 01101211);

echo 'NIM   = '. $data_siswa->getnim();
echo '<br>Mata Kuliah = '.$data_siswa->getmatkul();
echo '<br>Nilai = '.$data_siswa->getnilai();
echo '<br>Grade = '.$data_siswa->grade();
echo '<br>Hasil = '.$data_siswa->hasil();

?>
<hr>
  <div class="row">
        <div class="col-12 bg-light pt-3">
            <p>Leb Pemrograman WEB Lanjutan<p>
            Dosen Sirojul Munir S.SI,M.KOM
            <p>STT-NF-KAMPUS B</p>
        </div>
  </div>
</div>
</body>
</html>