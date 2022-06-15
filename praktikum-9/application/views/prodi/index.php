<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodi</title>
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
            <h1>Kelola Data Prodi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Home</a></li>
              <li class="breadcrumb-item active">Data Prodi</li>
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
          <h3 class="card-title">Data Prodi</h3>

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
    <table class="table">
    <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Kode</th>
      <th scope="col">Nama Prodi</th>
      <th scope="col">Ketua Prodi</th>
      <th scope="col">Activies</th>
    </tr>
    </thead>
    <tbody>
        <?php
            $nomor = 1;
            foreach ($list_prodi as $row) {
            echo'<tr><td>'.$nomor.'</td>';
            echo'<td>'.$row -> kode .'</td>';
            echo'<td>'.$row -> nama.'</td>';
            echo'<td>'.$row -> kaprodi.'</td>';
        ?>
            <td><a href="prodi/view?id=<?=$row->kode;?>"> View |</a><a href="prodi/edit?id=<?=$row->kode;?>"> Edit |</a><a href="prodi/delete?id=<?=$row->kode;?>" onclick='if(!confirm("Anda Yakin Ingin Menghapus Data Prodi Ini?")) {return false}'>Delete</a></td></tr>
        <?php
            $nomor++;
            }
        ?>
    </tbody>
    </table>
    <br>
    <a class="btn btn-success" role = 'button' style = 'color: white' href="prodi/create">Create Form Prodi </a>
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