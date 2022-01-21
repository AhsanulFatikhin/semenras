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
<div class="card">
            <div class="card-body" div style="border: 1px solid rgb(204, 204, 204); padding: 5px; overflow: auto; width: 1150px; height: 800px;background-color: rgb(255, 255, 255);">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                 <tr>
                  <th>Id Pabrik</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>No Telfon</th>
                  <th>Email</th>
                  <th>Deskripsi</th>
                  <th>Facebook</th>
                  <th>Instagram</th>
                  <th>Google</th>
                  <th>Yahoo</th>
                  <th>Selesai Proyek</th>
                  <th>Kota Pemasaran</th>
                  <th>Kepuasan Pelanggan</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach($data as $d){ ?>
                    <tr>
                       <td><?php echo $d['idpabrik']; ?></td>
                       <td><?php echo $d['nama']; ?></td>
                       <td><?php echo $d['alamat']; ?></td>
                       <td><?php echo $d['telfon']; ?></td>
                       <td><?php echo $d['email']; ?></td>
                       <td><?php echo $d['deskripsi']; ?></td>
                       <td><?php echo $d['facebook']; ?></td>
                       <td><?php echo $d['instagram']; ?></td>
                       <td><?php echo $d['google']; ?></td>
                       <td><?php echo $d['yahoo']; ?></td>
                       <td><?php echo $d['proyek_selesai']; ?></td>
                       <td><?php echo $d['kepuasan']; ?></td>
                       <td><?php echo $d['pemasaran']; ?></td>
                       <td align="center">
                       <a href="<?php echo base_url()."index.php/admin/pabrik/edit_pabrik/".$d['idpabrik'];?>" class="fa fa-edit" style="font-size:24px; color: black"></a> ||
                       <a href="<?php echo base_url()."index.php/admin/pabrik/hapus_pabrik/".$d['idpabrik'];?>" class="fa fa-trash-o" style="font-size:24px; color: black"></a>
                    </tr>
                  <?php } ?>
              </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
    <a  href="<?php echo site_url('admin/pabrik/add_pabrik') ?>" class="fa fa-plus-square-o" style="font-size:24px; margin-top: 10px; margin-left: 20px; color: black; margin-bottom: 20px;">Tambah Data</a>
  </div>