 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Keunggulan</h1>
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
                <h3 class="card-title">Edit Keunggulan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" enctype="multipart/form-data" action="<?php echo base_url(). "index.php/admin/keunggulan/update_keunggulan" ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Id Keunggulan</label>
                    <input class="form-control form-control-lg" type="text" id="usr" name="idkeunggulan" value="<?php echo $idkeunggulan;?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Keunggulan</label>
                    <input class="form-control form-control-lg" type="text" name="nama" value="<?php echo $nama;?>">
                  </div>
                 <div class="form-group">
                    <label>Id Product</label>
                    <select class="form-control" name="idproduct">
                     <option disabled selected>-- Pilih Product --</option>
                        <?php foreach ($product as $data_product) { ?>
                         <option  value="<?php echo $data_product["idproduct"] ;?>" selected=""><?php echo $data_product["nama"] ;?></option>
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