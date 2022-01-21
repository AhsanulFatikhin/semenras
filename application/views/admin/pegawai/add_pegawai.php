 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pegawai</h1>
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
                <h3 class="card-title">Tambah Pegawai</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" enctype="multipart/form-data" action="<?php echo base_url(). "index.php/admin/pegawai/insert_pegawai" ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pegawai</label>
                    <input class="form-control form-control-lg" type="text" placeholder="nama pegawai" name="nama">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Divisi Pegawai</label>
                    <input class="form-control form-control-lg" type="text" placeholder="divisi pegawai" name="divisi">
                  </div>
                <div class="form-group">
                    <label>Id Pabrik</label>
                    <select class="form-control" name="idpabrik">
                     <option disabled selected>-- Pilih Pabrik --</option>
                        <?php foreach ($pabrik as $data_pabrik) { ?>
                         <option  value="<?php echo $data_pabrik["idpabrik"] ;?>" selected=""><?php echo $data_pabrik["nama"] ;?></option>
                         <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Id Foto Pegawai</label>
                    <select class="form-control" name="idfoto_pegawai">
                     <option disabled selected>-- Pilih Foto Pegawai --</option>
                        <?php foreach ($foto_pegawai as $data_foto_pegawai) { ?>
                         <option  value="<?php echo $data_foto_pegawai["idfoto_pegawai"] ;?>" selected=""><?php echo $data_foto_pegawai["foto"] ;?></option>
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