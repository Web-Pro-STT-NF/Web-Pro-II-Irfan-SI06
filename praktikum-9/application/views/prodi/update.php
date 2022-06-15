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
            <h1>Form Prodi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Form Prodi</li>
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
          <h3 class="card-title">Update Form Prodi</h3>

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
        <?php
            $hidden = ['idedit'=>$prdedit->kode];
        ?>
        <?php echo form_open('prodi/save','',$hidden)?>
        <div class="form-group row">
    <label for="ipk" class="col-4 col-form-label">Kode Prodi</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-graduation-cap"></i>
          </div>
        </div> 
        <input id="kode" name="kode" value="<?=$prdedit->kode?>" type="text" class="form-control" value="">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Prodi</label> 
    <div class="col-8">
    <?php
        $selected_TI = ($prdedit->nama=="Teknik Informasi")?"selected":"";
        $selected_SI = ($prdedit->nama=="Sistem Informasi")?"selected":"";
        $selected_BD = ($prdedit->nama=="Basis Digital")?"selected":"";
    ?>
      <select id="nama" name="nama" class="custom-select">
        <option value="Teknik Informasi" <?=$selected_TI?>>Teknik Informasi</option>
        <option value="Sistem Informasi" <?=$selected_SI?>>Sistem Informasi</option>
        <option value="Basis Digital" <?=$selected_BD?>>Basis Digital</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="ipk" class="col-4 col-form-label">Kaprodi</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-graduation-cap"></i>
          </div>
        </div> 
        <input id="kaprodi" name="kaprodi" value="<?=$prdedit->kaprodi?>" type="text" class="form-control" value="">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
<?php echo form_close();?>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
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