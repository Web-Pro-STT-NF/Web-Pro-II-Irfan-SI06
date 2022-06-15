<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
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
            <h1>Kelola Data Dosen</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Index</li>
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
          <h3 class="card-title">Daftar Dosen</h3>

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
            <a class="btn btn-success" role = 'button' style = 'color: white' href="dosen/create">Create Form Dosen </a> 
            <table class="table">
    <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">NIM</th>
      <th scope="col">Nama</th>
      <th scope="col">Gender</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Tempat Lahir</th>
      <th scope="col">Pendidikan Akhir</th>
      <th scope="col">Program Studi</th>
      <th scope="col">Activies</th>
    </tr>
    </thead>
    <tbody>
        <?php
            $nomor = 1;
            foreach ($list_dosen as $row) {
            echo'<tr><td>'.$nomor.'</td>';
            echo'<td>'.$row->nidn.'</td>';
            echo'<td>'.$row->nama.'</td>';
            echo'<td>'.$row->gender.'</td>';
            echo'<td>'.$row->tgl_lahir.'</td>';
            echo'<td>'.$row->tmp_lahir.'</td>';
            echo'<td>'.$row->pendidikan_akhir.'</td>';
            echo'<td>'.$row->prodi_kode.'</td>';
        ?>
            <td><a href="dosen/view?id=<?=$row->nidn;?>"> View |</a><a href="dosen/edit?id=<?=$row->nidn;?>"> Edit |</a><a href="dosen/delete?id=<?=$row->nidn;?>" onclick='if(!confirm("Apakah kamu Ingin Menghapus Data Dosen Ini?")) {return false}'>Delete</a></td></tr>
        <?php
            $nomor++;
            }
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