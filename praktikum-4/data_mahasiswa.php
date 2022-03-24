<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/c875de6e86.js" crossorigin="anonymous"></script>
  </head>
<body>
<div class="container card">
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
        <a class="nav-link" href="#">Login</a>
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
</nav>
<hr>

<?php
  include_once "class_mahasiswa.php";
  echo'<h6>Show Entires</h6>
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">NO.</th>
      <th scope="col">NIM</th>
      <th scope="col">Nama</th>
      <th scope="col">Prodi</th>
      <th scope="col">Thn Angkatan</th>
      <th scope="col">IPK</th>
      <th scope="col">Predikat</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>';

  $data_siswa1 = new Mahasiswa (02011, "Faiz Rizki", "TI", "2012", 3.8);
  $data_siswa2 = new Mahasiswa (02012, "Alissa Khairunnisa", "TI", "2012", 3.9);
  $data_siswa3 = new Mahasiswa (01011, "Rosalie Naurah", "SI", "2010", 3.46);
  $data_siswa4 = new Mahasiswa (01012, "Defghi Muhammad", "SI", "2010", 3.2,);
  $aray = [$data_siswa1, $data_siswa2, $data_siswa3, $data_siswa4];
  $nomor = 1;

  foreach($aray as $data_siswa1){
  echo '<tr><th>'. $nomor.'</th>';
  echo '<td>'.$data_siswa1->getNim().'</td>';
  echo '<td>'.$data_siswa1->getNama().'</td>';
  echo '<td>'.$data_siswa1->getProdi().'</td>';
  echo '<td>'.$data_siswa1->getThn_angkatan().'</td>';
  echo '<td>'.$data_siswa1->getIpk().'</td>';
  echo '<td>'.$data_siswa1->predikat().'</td>';
  echo '<td><i class="fas fa-eye" style="color: blue;"></i><i class="fas fa-pen" style="color: blue;"></i></td></tr>';
  $nomor++;
  }
  echo '</tbody>
  </table>';
?>

<br>
<hr>
  <div class="row">
        <div class="col-12 bg-light pt-3">
            <p class="navbar-brand">Lab Pemrograman WEB Lanjutan<p>
            Dosen Sirojul Munir S.SI,M.KOM
            <p>STT-NF-KAMPUS B</p>
        </div>
  </div>
</div>
</body>
</html>
