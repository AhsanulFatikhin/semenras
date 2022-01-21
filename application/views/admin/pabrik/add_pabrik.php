 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pabrik</h1>
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
                <h3 class="card-title">Tambah Foto Dan Video Pabrik</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" enctype="multipart/form-data" action="<?php echo base_url(). "index.php/admin/pabrik/do_insert_pab" ?>">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pabrik</label>
                    <input class="form-control form-control-lg" type="text" placeholder="nama pabrik" name="nama">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat Pabrik</label>
                    <input class="form-control form-control-lg" type="text" placeholder="alamat pabrik" name="alamat">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Telfon Pabrik</label>
                    <input class="form-control form-control-lg" type="text" placeholder="no telfon pabrik" name="telfon">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email Pabrik</label>
                    <input class="form-control form-control-lg" type="text" placeholder="email pabrik" name="email">
                  </div>
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" rows="3" placeholder="Deskripsi" name="deskripsi"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Facebook Pabrik</label>
                    <input class="form-control form-control-lg" type="text" placeholder="facebook pabrik" name="facebook">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Instagram Pabrik</label>
                    <input class="form-control form-control-lg" type="text" placeholder="instagram pabrik" name="instagram">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Google Pabrik</label>
                    <input class="form-control form-control-lg" type="text" placeholder="google pabrik" name="google">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Yahoo Pabrik</label>
                    <input class="form-control form-control-lg" type="text" placeholder="yahoo pabrik" name="yahoo">
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
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
  </div>