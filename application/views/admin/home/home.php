 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Home</h1>
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
                  <th>Id Home</th>
                  <th>Nama</th>
                  <th>deskripsi</th>
                  <th>idpabrik</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($data as $d){ ?>
                    <tr>
                       <td><?php echo $d['idhome']; ?></td>
                       <td><?php echo $d['nama']; ?></td>
                       <td><?php echo $d['deskripsi']; ?></td>
                       <td><?php echo $d['idpabrik']; ?></td>
                    <td align="center">
                    <a href="<?php echo base_url()."index.php/admin/home/edit_home/".$d['idhome'];?>">   Edit</a> ||
                    <a href="<?php echo base_url()."index.php/admin/home/hapus_home/".$d['idhome'];?>">Hapus</a>

                </tr>
                  <?php } ?>
              </tbody>
              </table>
            </div>
            <a  href="<?php echo site_url('admin/home/add_home') ?>" class="solid-black-text tm-title" style="padding-top: 10px;">Tambah Data</a>
            <ul class="pagination">
              <li class="paginate_button page-item previous disabled" id="example2_previous" style="
                 margin-left: 850px;">
                  <a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
              </li>
              <li class="paginate_button page-item active">
                <a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
              <li class="paginate_button page-item ">
                <a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
              <li class="paginate_button page-item ">
                <a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
              <li class="paginate_button page-item ">
                <a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
              <li class="paginate_button page-item ">
                <a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
              <li class="paginate_button page-item ">
                <a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
              <li class="paginate_button page-item next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
              </li>
            </ul>
            <!-- /.card-body -->
          </div>
    
  </div>