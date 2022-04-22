<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Tanggal Periksa</th>
      <th scope="col">Kode Pasien</th>
      <th scope="col">Nama Pasien</th>
      <th scope="col">Gender</th>
      <th scope="col">Berat(kg)</th>
      <th scope="col">Tinggi(cm)</th>
      <th scope="col">Nilai BMI</th>
      <th scope="col">Status BMI</th>
    </tr>
  </thead>
  <tbody>
    <?php
    require_once "class_BMI.php";

    $nomor = 1;
    $bb1 = new bmi("P001", "Ahmad", "L", 69.8, 169);
    $bb1->tanggal = "2022-01-10";
    $bb2 = new bmi("P002", "Rina", "P", 55.3, 165);
    $bb2->tanggal = "2022-01-10";
    $bb3 = new bmi("P003", "Lutfi", "L", 45.2, 171);
    $bb3->tanggal = "2022-01-11";
    
    $_tanggal_periksa = isset ($_POST['tanggal_periksa']) ? $_POST['tanggal_periksa'] : '';
    $_kode_pasien = isset ($_POST['kode_pasien']) ? $_POST['kode_pasien'] : '';
    $_nama_pasien = isset ($_POST['nama_pasien']) ? $_POST['nama_pasien'] : '';
    $_gender = isset ($_POST['gender']) ? $_POST['gender'] : '';
    $_berat = isset ($_POST['berat']) ? floatval($_POST['berat']) : '';
    $_tinggi = isset ($_POST['tinggi']) ? floatval($_POST['tinggi']) : '';

    $bb4 = new bmi ($_kode_pasien, $_nama_pasien, $_gender, $_berat, $_tinggi);
    $bb4->tanggal = $_tanggal_periksa;
  

    
    $array = [$bb1, $bb2, $bb3, $bb4];
    
    foreach ($array as $bb){
    echo '<tr><th>'.$nomor.'</th>';
    echo'<td>'.$bb->tanggal.'</td>';
    echo'<td>'.$bb->getKode().'</td>';
    echo'<td>'.$bb->getNama().'</td>';
    echo'<td>'.$bb->getGender().'</td>';
    echo'<td>'.$bb->getBerat().'</td>';
    echo'<td>'.$bb->getTinggi().'</td>';
    echo'<td>'.$bb->nilaiBMI().'</td>';
    echo'<td>'.$bb->statusBMI().'</td></tr>';
    $nomor ++;
    }
    echo'</tbody>
    </table>';
    ?>
</body>
</html>