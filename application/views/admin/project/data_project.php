 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Project Pabrik</h1>
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
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                 <tr>
                  <th>Id Project</th>
                  <th>Nama Project</th>
                  <th>Alamat Project</th>
                  <th>Luas Project</th>
                  <th>Tahun Project</th>
                  <th>Biaya Project</th>
                  <th>Arsitek Project</th>
                  <th>Deskripsi Project</th>
                  <th>Id Pabrik</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($data as $d){ ?>
                    <tr>
                       <td><?php echo $d['idproject']; ?></td>
                       <td><?php echo $d['nama']; ?></td>
                       <td><?php echo $d['alamat']; ?></td>
                       <td><?php echo $d['luas']; ?></td>
                       <td><?php echo $d['tahun']; ?></td>
                       <td><?php echo $d['biaya']; ?></td>
                       <td><?php echo $d['arsitek']; ?></td>
                       <td><?php echo $d['deskripsi']; ?></td>                       
                       <td><?php echo $d['idpabrik']; ?></td>
                    <td align="center">
                    <a href="<?php echo base_url()."index.php/admin/project/edit_project/".$d['idproject'];?>" class="fa fa-edit" style="font-size:24px; color: black"></a> ||
                    <a href="<?php echo base_url()."index.php/admin/project/hapus_project/".$d['idproject'];?>" class="fa fa-trash-o" style="font-size:24px; color: black"></a>
                </tr>
                  <?php } ?>
              </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
    <a  href="<?php echo site_url('admin/project/add_project') ?>" class="fa fa-plus-square-o" style="font-size:24px; padding-top: 10px; margin-left: 20px; color: black">Tambah Data</a>
  </div>