 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Visi</h1>
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
                <h3 class="card-title">Edit Visi Pabrik</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" enctype="multipart/form-data" action="<?php echo base_url(). "index.php/admin/visi/update_visi" ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Id Visi</label>
                    <input class="form-control form-control-lg" type="text" id="usr" name="idvisi" readonly value="<?php echo $idvisi;?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Visi Pabrik</label>
                    <input class="form-control form-control-lg" type="text" id="usr" name="visi" value="<?php echo $visi;?>">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
  </div>