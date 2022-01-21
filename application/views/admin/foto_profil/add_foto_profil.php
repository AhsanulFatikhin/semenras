 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Foto Profil</h1>
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
                <h3 class="card-title">Tambah Foto Profil</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" enctype="multipart/form-data" action="<?php echo base_url(). "index.php/admin/foto_profil/aksi_upload" ?>">
                <!-- <input type="file" name="berkas" /> -->
                <div class="form-group">
                    <label for="exampleInputFile">Input Foto</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="berkas" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Id Profil</label>
                    <select class="form-control" name="idprofil">
                     <option disabled selected>-- Pilih Profil --</option>
                        <?php foreach ($profil as $data_profil) { ?>
                         <option  value="<?php echo $data_profil["idprofil"] ;?>" selected=""><?php echo $data_profil["sejarah"] ;?></option>
                         <?php } ?>
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" value="Upload">Submit</button>
                </div>
              </form>
            </div>
  </div>