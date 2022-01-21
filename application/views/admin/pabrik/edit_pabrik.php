 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pabrik</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Pabrik</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" enctype="multipart/form-data" action="<?php echo base_url(). "index.php/admin/pabrik/update_pabrik" ?>">
                <div class="form-group">
                    <label for="exampleInputEmail1">Id Pabrik</label>
                    <input class="form-control form-control-lg" type="text" id="usr" name="idpabrik" value="<?php echo $idpabrik; ?>" readonly >
                  </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pabrik</label>
                    <input class="form-control form-control-lg" type="text" id="usr" name="nama" value="<?php echo $nama; ?>" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat Pabrik</label>
                    <input class="form-control form-control-lg" type="text" id="usr" name="alamat" value="<?php echo $alamat; ?>" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Telfon Pabrik</label>
                    <input class="form-control form-control-lg" type="text" id="usr" name="telfon" value="<?php echo $telfon; ?>" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email Pabrik</label>
                    <input class="form-control form-control-lg" type="text" id="usr" name="email" value="<?php echo $email; ?>" >
                  </div>
                  <textarea class="form-control" rows="3" placeholder="Deskripsi" name="deskripsi"><?php echo $deskripsi;?></textarea>
                  </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Facebook Pabrik</label>
                    <input class="form-control form-control-lg" type="text" id="usr" name="facebook" value="<?php echo $facebook; ?>" >
                  </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Instagram Pabrik</label>
                    <input class="form-control form-control-lg" type="text" id="usr" name="instagram" value="<?php echo $instagram; ?>" >
                  </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Google Pabrik</label>
                    <input class="form-control form-control-lg" type="text" id="usr" name="google" value="<?php echo $google; ?>" >
                  </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Yahoo Pabrik</label>
                    <input class="form-control form-control-lg" type="text" id="usr" name="yahoo" value="<?php echo $yahoo; ?>" >
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Proyek Selesai</label>
                    <input class="form-control form-control-lg" type="text" id="usr" name="proyek_selesai" value="<?php echo $proyek_selesai;?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kepuasan Pelanggan</label>
                    <input class="form-control form-control-lg" type="text" id="usr" name="kepuasan" value="<?php echo $kepuasan;?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kota Pemasaran</label>
                    <input class="form-control form-control-lg" type="text" id="usr" name="pemasaran" value="<?php echo $pemasaran;?>">
                  </div>
                  <div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
  </div>