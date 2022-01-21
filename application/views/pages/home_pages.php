

    <div class="banner-area banner-slider-active">

            <!-- Single Banner -->
        <div class="banner bg-image-1 justify-content-center align-items-center" data-black-overlay="1">
           <div class="container">
              <div class="row no-gutters align-items-center justify-content-center">
                <div class="col-xl-6 col-lg-8 col-12">

                </div>
              </div>
           </div>
        </div>
            <!--// Single Banner -->

    </div>

  <main id="page-content">
      
      <!-- Call to Action -->
      <div class="call-to-action-area bg-theme">
        <div class="container">
          <div class="call-to-action"></div>
        </div>
      </div>
      <!--// Call to Action -->
      
            <!-- About Area -->
            <section class="cr-section about-area bg-white section-padding-md" style="padding-bottom: 70px;">
                <div class="container">
             <?php 
              $sql = "select * from pabrik limit 1";
              $result = $this->db->query($sql);
              foreach($result->result() as $d){ ?>
          <div class="row">
            <div class="col-lg-6">
              <div class="section-title">
                <h3><?php echo $d->nama;?></h3>
              </div>
            </div>
          </div>
          <div class="about-timeline-single">
            <div class="about-timeline-content">
              <h5 style="text-align: center;"><?php echo $d->deskripsi;?></h5>
            </div>
          </div>
            </div>
                <?php } ?>
            </section>
     <div class="divider-traingle"></div>
      <section class="cr-section portfolio-area bg-dark section-padding-md">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="section-title">
                <h3>PROYEK KAMI</h3>
              </div>
            </div>
          </div>

          <div class="row justify-content-center sa-projects sa-projects-popup-active">

            <!-- Single Project -->
            <?php 
              $sql = "select * from foto_project";
              $result = $this->db->query($sql);
              foreach($result->result() as $d){ ?>
            
               <div class="col-lg-4 col-md-6 col-12 sa-project-single project-outdoor project-indoor">
                    <div class="single-project">
                          <div class="single-project-thumb" data-src="images/projects/project-lg/project-lg-image-1.jpg">
                               <img src="<?php echo base_url('assets/foto_project/'.$d->foto);?>" alt="project image">
                            </div>
                          </div>
                        </div>
              <?php } ?>
            <!--// Single Project -->           

           
            <!--// Single Project -->
          </div>
        </div>
      </section>

      <!--// About Area -->
    <div class="divider-traingle"></div>

      <!-- Team Area -->
      <section class="cr-section team-area bg-white section-padding-md">
        <div class="container">

          <div class="row">
            <div class="col-lg-6">
              <div class="section-title">
                <h3>STAF KAMI</h3>
              </div>
            </div>
          </div>

          <div class="row team-member-slider-active slider-navigation-style-1">
            
            <!-- Team Member -->
              <?php 
              $sql = "select * from pegawai join foto_pegawai on foto_pegawai.idfoto_pegawai = pegawai.idfoto_pegawai";
              $result = $this->db->query($sql);
              foreach($result->result() as $d){ ?>
            <div class="col-lg-3">
              <div class="team-member text-center">
                <div class="team-member-thumb">
                  <img src="<?php echo base_url('assets/foto_pegawai/'.$d->foto);?>" alt="team member image">
                </div>
                <div class="team-member-content">
                  <h5><?php echo $d->nama;?></h5>
                  <h6><?php echo $d->divisi;?></h6>
                  <div class="social-icons">
                    <ul>
                      <li class="whatsapp"><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                      <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li class="mail"><a href="#"><i class="fa fa-envelope"></i></a></li>
                      <li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
        <?php } ?>
            <!--// Team Member -->
            
          </div>

        </div>
      </section>
      <!--// Team Area -->

     <section class="cr-section funfact-area-2 bg-image-21 section-padding-xs bg-parallax" data-black-overlay="5">
      <?php 
        $sql = "select * from pabrik limit 1";
         $result = $this->db->query($sql);
         foreach($result->result() as $d){ ?>
        <div class="container">
          <div class="row justify-content-center">

            <!-- Single Funfact -->
            <div class="col-lg-3 col-md-5 col-sm-6 col-12">
              <div class="funfact2 text-center">
                <span class="funfact2-icon">
                  <img src="<?php echo base_url('assets/images/icons/funfact-icon-1.png')?>" alt="funfact icon">
                </span>
                <span class="odometer" data-count-to="<?php echo $d->proyek_selesai;?>"></span>
                <h6>Proyek Selesai</h6>
              </div>  
            </div>
            <!--// Single Funfact -->

            <!-- Single Funfact -->
            <div class="col-lg-3 col-md-5 col-sm-6 col-12">
              <div class="funfact2 text-center">
                <span class="funfact2-icon">
                  <img src="<?php echo base_url('assets/images/icons/funfact-icon-2.png')?>" alt="funfact icon">
                </span>
                <span class="odometer" data-count-to="<?php echo $d->kepuasan;?>"></span>
                <h6>Kepuasan Pelanggan</h6>
              </div>  
            </div>
            <!--// Single Funfact -->

            <!-- Single Funfact -->
            <div class="col-lg-3 col-md-5 col-sm-6 col-12">
              <div class="funfact2 text-center">
                <span class="funfact2-icon">
                  <img src="<?php echo base_url('assets/images/icons/funfact-icon-3.png')?>" alt="funfact icon">
                </span>
                <span class="odometer" data-count-to="<?php echo $d->pemasaran;?>"></span>
                <h6>Kota Pemasaran</h6>
              </div>  
            </div>
            <!--// Single Funfact -->
          </div>
        </div>
        <?php } ?>
      </section>
      <!--// Funfact Area -->

     

      <!-- Testimonial & Brand Logos Area -->
      
      <!--// Testimonial & Brand Logos Area -->

        </main>
        <!--// Page Content -->