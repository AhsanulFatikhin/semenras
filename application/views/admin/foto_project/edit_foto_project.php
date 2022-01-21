 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Foto Project</h1>
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
                <h3 class="card-title">Edit Foto Project</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" enctype="multipart/form-data" action="<?php echo base_url(). "index.php/admin/foto_project/update_foto_project" ?>">
                <div class="form-group">
                    <label for="exampleInputEmail1">Id Foto Project</label>
                    <input class="form-control form-control-lg" type="text" id="usr" name="idfoto_project" readonly value="<?php echo $idfoto_project;?>">
                  </div>
               <div class="form-group">
                    <label for="exampleInputFile">Input Foto</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="berkas" class="custom-file-input" id="exampleInputFile" value="<?php echo base_url('assets/foto_project/'.$foto);?>">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                     <!--  <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div> -->
                    </div>
                  </div>
                  <img src="<?php echo base_url('assets/foto_project/'.$foto);?>" style="width: 100px;">
                 <div class="form-group">
                    <label>Id Project</label>
                    <select class="form-control" name="idproject">
                     <option disabled selected>-- Pilih Project --</option>
                        <?php foreach ($project as $data_project) { ?>
                         <option  value="<?php echo $data_project["idproject"] ;?>" selected=""><?php echo $data_project["nama"] ;?></option>
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