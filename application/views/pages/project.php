  <!-- Portfolio Area -->
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
              $sql = "select * from project join foto_project on project.idproject = foto_project.idproject";
              $result = $this->db->query($sql);
              foreach($result->result() as $d){ ?>
            
               <div class="col-lg-4 col-md-6 col-12 sa-project-single project-outdoor project-indoor">
                    <div class="single-project">
                          <div class="single-project-thumb" data-src="images/projects/project-lg/project-lg-image-1.jpg">
                               <img src="<?php echo base_url('assets/foto_project/'.$d->foto);?>" alt="project image">
                            </div>
                            <div class="single-project-content" style="padding-bottom: 50px;">
                              <h5><a href="project-details.html"><?php echo $d->nama;?></a></h5>
                              <div class="loadmore-btn-holder">
                                <a href="<?php echo base_url()."index.php/pages/detail_project/detail_project/".$d->idproject;?>" class="cr-btn cr-loadmore-btn"><span>READ MORE</span></a>
                              </div>
                            </div>
                          </div>
                        </div>
              <?php } ?>
            <!--// Single Project -->           

           
            <!--// Single Project -->
          </div>
        </div>
      </section>
      <!--// Portfolio Area -->