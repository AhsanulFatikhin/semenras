<section class="cr-section about-area bg-white section-padding-md">
                <div class="container">
            <?php 
                    $sql = "select * from foto_pabrik limit 1";
                    $result = $this->db->query($sql);
                    foreach($result->result() as $d){ ?>
          <div class="row">
            <div class="col-lg-12">
              <div class="section-title">
                <h3>STRUKTUR ORGANISASI</h3>
              </div>
            </div>
          </div>
                 <img style="margin-left: auto; margin-bottom: 50px; width: auto; height: auto;" src="<?php echo base_url('assets/foto_pabrik/'.$d->foto);?>">
               <?php } ?>
                  <div class="row">
            <div class="col-lg-6">
              <div class="section-title">
                <h3 style="margin-top: 50px;">VISI</h3>
              </div>
            </div>
          </div>
           <?php 
          $sql = "select * from visi limit 1";
              $result = $this->db->query($sql);
              foreach($result->result() as $d){ ?>
          <div class="about-timeline-single">
            <div class="about-timeline-content">
              <h5 style="margin-bottom: 50px;"><?php echo $d->visi ?></h5>
            </div>
          </div>
          <?php } ?>
                  <div class="row">
            <div class="col-lg-6">
              <div class="section-title">
                <h3>MISI</h3>
              </div>
            </div>
          </div>
          <div class="row">

            <div class="col-lg-12">
              <div class="about-area-timeline">
              <?php 
              $sql = "select * from misi join foto_misi on foto_misi.idmisi = misi.idmisi";
              $result = $this->db->query($sql);
              foreach($result->result() as $d){ ?>
                <div class="about-timeline-single">
                    <img src="<?php echo base_url('assets/foto_misi/'.$d->foto);?>" style="height: 55px;">
                  <div class="about-timeline-content">
                    <h5 style="margin-top: 15px; margin-left: 16px;"><?php echo $d->misi; ?></h5>
                  </div>
                </div>
                <?php } ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <div class="section-title">
                <h3 style="margin-top: 50px;">SEJARAH</h3>
              </div>
            </div>
          </div>
          <div class="row">
            <?php 
              $sql = "select * from profil join foto_profil on foto_profil.idprofil = profil.idprofil
                      join foto_nomer_profil on foto_nomer_profil.idprofil = profil.idprofil";
              $result = $this->db->query($sql);
              foreach($result->result() as $d){ ?>
            <div class="col-lg-6">
              <div class="about-area-timeline">

                <div class="about-timeline-single">
                  <span class="about-timeline-icon">
                    <img src="<?php echo base_url('assets/foto_nomer_profil/'.$d->gambar);?>" style="height: 73px;">
                  </span>
                  <div class="about-timeline-content">
                    <h5><?php echo $d->sejarah;?></h5>
                    <p><?php echo $d->deskripsi;?>.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="about-area-images">
                <img src="<?php echo base_url('assets/foto_profil/'.$d->foto);?>" class="large-image" style="margin-bottom: 20px;">
              </div>
            </div>
        <?php } ?>
          </div>
                </div>
            </section>