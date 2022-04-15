<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Account Bank</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
<?php
require_once 'class_akunBank.php';
require_once 'class_akun.php';

echo'<h4>Daftar Akun Tabel</h4>
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">NO.</th>
      <th scope="col">No.Account</th>
      <th scope="col">Saldo</th>
      <th scope="col">Pemilik</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>C001</td>
      <td>6000000</td>
      <td>Ahmad</td>
    <tr>
    <tr>
      <td>2</td>
      <td>C002</td>
      <td>5350000</td>
      <td>Budi</td>
    <tr>
    <tr>
      <td>3</td>
      <td>C003</td>
      <td>2500000</td>
      <td>Kurniawan</td>
    <tr>
  </tbody>
  </table>';

$ab1 = new BankAccount('C001',6000000,'Ahmad');
$ab2 = new BankAccount('C002',5350000,'Budi');
$ab3 = new BankAccount('C003',2500000,'Kurniawan');

echo '<hr>';
echo '<h3>Ahmad Menabung Rp.1.000.000</h3>';
echo '<hr width=40%>';
$ab1->cetak();
$ab1->deposit(1000000);
echo '<br><h5>Setelah Menabung</h5>';
$ab1->cetak();
echo '<hr width=40%>';
echo '<h3>Ahmad Transfer ke Budi Rp.500.000 dan Kurniawan Rp.1.500.000</h3>';
$ab1->transfer($ab2,500000);
$ab1->transfer($ab3,1500000);
echo '*Biaya Transfer Rp.6.000';
echo '<br><h5>Sesudah transfer</h5>';
echo '<h6>Akun Ahmad</h6>';
$ab1->cetak();
echo '<hr width=40%>';
echo '<h6>Akun Budi</h6>';
$ab2->cetak();
echo '<hr width=40%>';
echo '<h6>Akun Kurniawan</h6>';
$ab3->cetak();
echo '<hr width=40%>';
echo '<h3>Budi Tarik Uang Rp.2.500.000</h3>';
$ab2->cetak();
$ab2->TarikUang(2500000);
echo '<br><h5>Sesudah Tarik Uang</h5>';
$ab2->cetak();
echo '<hr>';

?>

</body>
</html>


</body>
</html>