 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Instagram</h1>
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
                <h3 class="card-title">Tambah Instagram</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" enctype="multipart/form-data" action="<?php echo base_url(). "index.php/admin/instagram/update_instagram" ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Id Instagram</label>
                    <input class="form-control form-control-lg" type="text" id="usr" name="idinstagram" readonly value="<?php echo $idinstagram;?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Instagram</label>
                    <input class="form-control form-control-lg" type="text" id="usr" name="nama_ig" value="<?php echo $nama_ig;?>">
                  </div>
                  <div class="form-group">
                    <label>Id Pegawai</label>
                    <select class="form-control" name="idpegawai">
                     <option disabled selected>-- Pilih Pegawai --</option>
                        <?php foreach ($pegawai as $data_pegawai) { ?>
                         <option  value="<?php echo $data_pegawai["idpegawai"] ;?>" selected=""><?php echo $data_pegawai["nama"] ;?></option>
                         <?php } ?>
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
  </div>