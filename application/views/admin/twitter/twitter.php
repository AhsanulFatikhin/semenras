 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Twitter</h1>
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
<div class="card">
            
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                 <tr>
                  <th>Id Twitter</th>
                  <th>Nama Twitter</th>
                  <th>Id Pegawai</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
               <?php foreach($data as $d){ ?>
                    <tr>
                       <td><?php echo $d['idtwitter']; ?></td>
                       <td><?php echo $d['nama_twitter']; ?></td>
                       <td><?php echo $d['idpegawai']; ?></td>
                 <td align="center">
                    <a href="<?php echo base_url()."index.php/admin/twitter/edit_twitter/".$d['idtwitter'];?>" class="fa fa-edit" style="font-size:24px; color: black"></a> ||
                    <a href="<?php echo base_url()."index.php/admin/twitter/hapus_twitter/".$d['idtwitter'];?>" class="fa fa-trash-o" style="font-size:24px; color: black"></a>
                </tr>
                 <?php } ?>
              </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
    <a  href="<?php echo site_url('admin/twitter/add_twitter') ?>" class="fa fa-plus-square-o" style="font-size:24px; padding-top: 10px; margin-left: 20px; color: black">Tambah Data</a>
  </div>