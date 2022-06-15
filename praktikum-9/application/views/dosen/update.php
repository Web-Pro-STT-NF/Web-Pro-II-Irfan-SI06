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
            <h1>Update Form Dosen</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Form Dosen</li>
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
          <h3 class="card-title">Update Form Dosen</h3>

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
            $hidden = ['idedit'=>$dsnedit->nidn];
            ?>
        <?php echo form_open('dosen/save','',$hidden)?>
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIDN</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
          <i class="fa fa-qrcode"></i>
          </div>
        </div> 
        <input id="nidn" name="nidn" value="<?=$dsnedit->nidn?>"type="text" class="form-control" value="">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Dosen</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-book"></i>
          </div>
        </div> 
        <input id="nama" name="nama" value="<?=$dsnedit->nama?>" type="text" class="form-control" value="">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
    <?php
        $checked_l = ($dsnedit->gender=="L")?"checked":"";
        $checked_p = ($dsnedit->gender=="P")?"checked":"";
    ?>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="L" <?=$checked_l?>> 
        <label for="gender_0" class="custom-control-label">L</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="P" <?=$checked_p?>> 
        <label for="gender_1" class="custom-control-label">P</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="tgl_lahir" name="tgl_lahir" value="<?=$dsnedit->tgl_lahir?>"type="text" class="form-control" value="">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-map-pin"></i>
          </div>
        </div> 
        <input id="tmp_lahir" name="tmp_lahir" value="<?=$dsnedit->tmp_lahir?>" type="text" class="form-control" value="">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="pendidikan" class="col-4 col-form-label">Pendidikan Akhir</label> 
    <div class="col-8">
    <?php
        $selected_D3 = ($dsnedit->pendidikan_akhir=="D3")?"selected":"";
        $selected_S1 = ($dsnedit->pendidikan_akhir=="S1")?"selected":"";
        $selected_S2 = ($dsnedit->pendidikan_akhir=="S2")?"selected":"";
        $selected_S3 = ($dsnedit->pendidikan_akhir=="S3")?"selected":"";
    ?>
      <select id="pendidikan_akhir" name="pendidikan_akhir" class="custom-select">
        <option value="D3" <?=$selected_D3?>>Diploma</option>
        <option value="S1" <?=$selected_S1?>>Sarjana</option>
        <option value="S2" <?=$selected_S2?>>Magister</option>
        <option value="S3" <?=$selected_S3?>>Professor</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="prodi_Kode" class="col-4 col-form-label">Program Studi</label> 
    <div class="col-8">
    <?php
        $selected_TI = ($dsnedit->prodi_kode=="TI")?"selected":"";
        $selected_SI = ($dsnedit->prodi_kode=="SI")?"selected":"";
        $selected_BD = ($dsnedit->prodi_kode=="BD")?"selected":"";
    ?>
      <select id="prodi_kode" name="prodi_kode" class="custom-select">
        <option value="TI" <?=$selected_TI?>>Teknik Informasi</option>
        <option value="SI" <?=$selected_SI?>>Sistem Informasi</option>
        <option value="BD" <?=$selected_BD?>>Basis Digital</option>
      </select>
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