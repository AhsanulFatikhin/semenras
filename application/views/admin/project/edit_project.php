 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Project</h1>
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
                <h3 class="card-title">Edit Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" enctype="multipart/form-data" action="<?php echo base_url(). "index.php/admin/project/update_project" ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Id Project</label>
                    <input class="form-control form-control-lg" type="text" id="usr" name="idproject" readonly value="<?php echo $idproject;?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Project</label>
                    <input class="form-control form-control-lg" type="text" id="usr" name="nama" value="<?php echo $nama;?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat Project</label>
                    <input class="form-control form-control-lg" type="text" id="usr" name="alamat" value="<?php echo $alamat;?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Luas Project</label>
                    <input class="form-control form-control-lg" type="text" id="usr" name="luas" value="<?php echo $luas;?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tahun Project</label>
                    <input class="form-control form-control-lg" type="text" id="usr" name="tahun" value="<?php echo $tahun;?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Biaya Project</label>
                    <input class="form-control form-control-lg" type="text" id="usr" name="biaya" value="<?php echo $biaya;?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Arsitek Project</label>
                    <input class="form-control form-control-lg" type="text" id="usr" name="arsitek" value="<?php echo $arsitek;?>">
                  </div>
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" rows="3" placeholder="Deskripsi" name="deskripsi"><?php echo $deskripsi;?></textarea>
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
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
  </div>