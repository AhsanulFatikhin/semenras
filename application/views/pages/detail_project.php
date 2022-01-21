<!-- Mobile Menu -->
      <div class="mobile-menu-wrapper d-block d-lg-none">
        <div class="container">
          <div class="mobile-menu">
            <a href="index.html" class="logo">
              <img src="images/logo/logo-white.png" alt="logo theme">
            </a>
          </div>
        </div>
      </div>
      <!--// Mobile Menu -->

        </div>
        <!--// Header -->

        <!-- Page Content -->
        <main id="page-content">
    
      <!-- Portfolio Details Area -->
      <section class="cr-section portfolio-area bg-white section-padding-md">
        <div class="container">
          <div class="row">
            <div class="col-12">
            <?php 
              $sql = "select * from project join foto_project on project.idproject = foto_project.idproject where project.idproject = '".$idproject."' limit 1";
              $result = $this->db->query($sql);
              foreach($result->result() as $d){ ?>;
            <div class="col-12" style="margin-left: 500px">
              <img src="<?php echo base_url('assets/foto_project/'.$d->foto);?>" alt="project details">
            </div>
          </div>
         <?php } ?>;
          </div>
         <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-5 col-12">
              <div class="project-details-info">
                <h4 class="small-title">Project Information</h4>
                <ul>
                  <li><span>Client:</span> <?php echo $nama;?></li>
                  <li><span>Location:</span> <?php echo $alamat;?></li>
                  <li><span>Area:</span> <?php echo $luas;?></li>
                  <li><span>Year Completed:</span> <?php echo $tahun;?></li>
                  <li><span>Value:</span> <?php echo $biaya;?></li>
                  <li><span>Architect:</span> <?php echo $arsitek;?></li>
                </ul>
              </div>
            </div>
           <div class="col-xl-9 col-lg-8 col-md-7 col-12">
              <div class="project-details-description">
                <h4 class="small-title">Project Description</h4>
                <p><?php echo $deskripsi;?></p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--// Portfolio Details Area -->

        </main>
        <!--// Page Content -->