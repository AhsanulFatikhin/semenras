 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Product</h1>
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
                <h3 class="card-title">Tambah Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" enctype="multipart/form-data" action="<?php echo base_url(). "index.php/admin/product/update_product" ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Id Product</label>
                    <input class="form-control form-control-lg" type="text" id="usr" name="idproduct" readonly value="<?php echo $idproduct;?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Product</label>
                    <input class="form-control form-control-lg" type="text" id="usr" name="nama" value="<?php echo $nama;?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Berat Product</label>
                    <input class="form-control form-control-lg" type="text" id="usr" name="berat" value="<?php echo $berat;?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Daya Rekat Product</label>
                    <input class="form-control form-control-lg" type="text" id="usr" name="dayarekat" value="<?php echo $dayarekat;?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pengertian Product</label>
                    <input class="form-control form-control-lg" type="text" id="usr" name="pengertian" value="<?php echo $pengertian;?>">
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