 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Foto Pabrik</h1>
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
                  <th>Id Foto Pabrik</th>
                  <th>Foto</th>
                  <th>Id Pabrik</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($data as $d){ ?>
                    <tr>
                       <td><?php echo $d['idfoto_pabrik']; ?></td>
                       <td><?php echo $d['foto']; ?></td>
                       <td><?php echo $d['idpabrik']; ?></td>
                 <td align="center">
                    <!-- <a href="<?php echo base_url()."index.php/admin/foto_pabrik/edit_foto_pabrik/".$d['idfoto_pabrik'];?>" class="fa fa-edit" style="font-size:24px; color: black"></a> || -->
                    <a  href="<?php echo base_url()."index.php/admin/foto_pabrik/hapus_foto_pabrik/".$d['idfoto_pabrik'];?>" class="fa fa-trash-o" style="font-size:24px; color: black"></a>
                </tr>
                 <?php } ?>
              </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
    <a  href="<?php echo site_url('admin/foto_pabrik/add_foto_pabrik') ?>" class="fa fa-plus-square-o" style="font-size:24px; padding-top: 10px; margin-left: 20px; color: black">Tambah Data</a>
  </div>