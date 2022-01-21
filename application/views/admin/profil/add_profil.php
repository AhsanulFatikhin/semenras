 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Profil</h1>
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
                <h3 class="card-title">Tambah Profil</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" enctype="multipart/form-data" action="<?php echo base_url(). "index.php/admin/profil/insert_profil" ?>">
                <div class="form-group">
                    <label for="exampleInputEmail1">Sejarah</label>
                    <input class="form-control form-control-lg" type="text" placeholder="Sejarah" name="sejarah">
                  </div>
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" rows="3" placeholder="Deskripsi" name="deskripsi"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Proyek Selesai</label>
                    <input class="form-control form-control-lg" type="text" placeholder="proyek selesai" name="proyek_selesai">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kepuasan Pelanggan</label>
                    <input class="form-control form-control-lg" type="text" placeholder="Kepuasan Pelanggan" name="kepuasan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kota Pemasaran</label>
                    <input class="form-control form-control-lg" type="text" placeholder="Kota Pemasaran" name="pemasaran">
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