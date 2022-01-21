

        <!-- Page Content -->
        <main id="page-content">
    
      <!-- Portfolio Details Area -->
       <?php 
              $sql = "select * from product join foto_detail_product on foto_detail_product.idproduct = product.idproduct where product.idproduct = '".$idproduct."' limit 1";
              $result = $this->db->query($sql);
              foreach($result->result() as $a){ ?>
      <section class="cr-section portfolio-area bg-white section-padding-md">
        <div class="container">
          <div class="row">
          <td>
            <div class="col-8">
              <img src="<?php echo base_url('assets/foto_detail_produk/'.$a->foto);?>" alt="project details">
            </div>
          </td>
          <td>
            <div class="col-4">
              <?php 
              $sql = "select * from product join foto_penggunaan on foto_penggunaan.idproduct = product.idproduct where product.idproduct = '".$idproduct."'";
              $result = $this->db->query($sql);
              foreach($result->result() as $a){ ?>
              <img  src="<?php echo base_url('assets/foto_penggunaan/'.$a->foto);?>" alt="project details">
              <?php } ?>
            </div>
          </td>
          </div>
          <div class="row">
            <div class="col-lg-3 col-12">
              <div class="project-details-info" style="width: 450px;">
                <h4 class="small-title"><?php echo $a->nama;?></h4>
                <ul>
                  <li><span>Daya Rekat :</span> <?php echo $a->dayarekat;?></li>
                  <li><span>Berat Bersih :</span> <?php echo $a->berat;?></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-5 col-12">
              <div class="project-details-description">
                <h4 class="small-title">DESKRIPSI PRODUK</h4>
                <p style="text-align: justify;"><?php echo $a->deskripsi;?></p>
              </div>
            </div>
            <div class="col-lg-4 col-12">
              <div class="project-details-description">
                <h4 class="small-title">KEUNGGULAN</h4>
                <?php 
                    $sql = "select * from product join keunggulan on keunggulan.idproduk = product.idproduct where product.idproduct = '".$idproduct."'";
                    $result = $this->db->query($sql);
                    foreach($result->result() as $a){ ?>
                <p style="margin-bottom: 10px;">* <?php echo $a->keunggulan;?></p>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </section>
       <?php } ?>;
      <!--// Portfolio Details Area -->

        </main>
        <!--// Page Content -->