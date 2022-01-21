
        <!-- Page Content -->
        <main id="page-content">
    
            <!-- Portfolio Area -->
      <section class="cr-section portfolio-area bg-grey section-padding-md">
        <div class="container">

          <div class="row justify-content-center sa-projects-popup-active">

            <!-- Single Project -->
           <?php 
              $sql = "select * from product join foto_product on product.idproduct = foto_product.idproduct";
              $result = $this->db->query($sql);
              $i =1;
             foreach($result->result() as $a){ ?>
            <div class="col-lg-4 col-md-6 col-12">
              <div class="single-project">
                <div class="single-project-thumb" data-src="images/projects/project-lg/project-lg-image-1.jpg">
                   <?php echo "<img  src='".base_url('assets/foto_produk/'.$a->foto)."'>";?>
                </div>
                <div class="single-project-content" style="padding-bottom: 50px;">
                <td>
                  <h5><?php echo $a->nama;?></h5>
                </td>
                <td>
                  <h6><?php echo $a->pengertian;?></h6>
                </td>
                  <div class="loadmore-btn-holder">
                    <a href="<?php echo base_url()."index.php/pages/detail_produk/detail_produk/".$a->idproduct;?>" class="cr-btn cr-loadmore-btn"><span>DETAIL PRODUK</span></a>
                  </div>
                </div>
              </div>
            </div>

              <?php } ?>
            <!--// Single Project -->   
          </div>
        </div>
      </section>
      <!--// Portfolio Area -->

        </main>
        <!--// Page Content -->
