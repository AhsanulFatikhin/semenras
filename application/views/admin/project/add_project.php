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
                <h3 class="card-title">Tambah Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" enctype="multipart/form-data" action="<?php echo base_url(). "index.php/admin/project/insert_project" ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Project</label>
                    <input class="form-control form-control-lg" type="text" placeholder="nama project" name="nama">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat Project</label>
                    <input class="form-control form-control-lg" type="text" placeholder="alamat project" name="alamat">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Luas Project</label>
                    <input class="form-control form-control-lg" type="text" placeholder="luas project" name="luas">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tahun Project</label>
                    <input class="form-control form-control-lg" type="text" placeholder="tahun project" name="tahun">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Biaya Project</label>
                    <input class="form-control form-control-lg" type="text" placeholder="biaya project" name="biaya">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Arsitek Project</label>
                    <input class="form-control form-control-lg" type="text" placeholder="arsitek project" name="arsitek">
                  </div>
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" rows="3" placeholder="Deskripsi" name="deskripsi"></textarea>
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