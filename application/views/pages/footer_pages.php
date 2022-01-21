  <!-- Footer -->
        <div class="footer">

      <!-- Footer Top Area -->
      <div class="footer-top-area"> 
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-5">
              <ul class="footer-social-icons">
                <?php 
              $sql = "select * from pabrik limit 1";
              $result = $this->db->query($sql);
              foreach($result->result() as $d){ ?>;
                <li><a target="_blank" href="<?php echo $d->facebook;?>"><i class="fa fa-facebook"></i></a></li>
                <li><a target="_blank" href="<?php echo $d->google;?>"><i class="fa fa-envelope"></i></a></li>
                <li><a target="_blank" href="<?php echo $d->yahoo;?>"><i class="fa fa-yahoo"></i></a></li>
                <li><a target="_blank" href="<?php echo $d->instagram;?>"><i class="fa fa-instagram"></i></a></li>
                <?php } ?>;
              </ul>
            </div>
            <div class="col-lg-7">
              <form action="#" class="footer-newsletter-form">
                <input type="email" placeholder="Alamat email...">
                <input type="submit" value="Kirim">
              </form>
            </div>
          </div>
        </div>
      </div>
      <!--// Footer Top Area -->

      <!-- Footer Bottom Area -->
      <div class="footer-bottom-area section-padding-xs bg-blacks">
        <div class="container">
          <div class="row widgets footer-widgets">

            <div class="col-lg-3">
              <div class="single-widget widget-about">
                <h5 class="widget-title">TENTANG KAMI</h5>
                <a href="index.html">
                  <?php 
                     $sql = "select * from foto_footer limit 1";
                     $result = $this->db->query($sql);
                     foreach($result->result() as $d){ ?>
                  <img src="<?php echo base_url('assets/foto_logo_footer/'.$d->foto);?>" alt="footer logo">
                  <?php } ?>
                </a>
                <p>CV. ANUGERAH SUKSES SEJAHTERA.</p>
              </div>
            </div>

            <div class="col-lg-3">
              <div class="single-widget widget-quick-links">
                <h5 class="widget-title">Produk Kami</h5>
                <ul>
                   <?php 
                        $sql = "select * from product";
                        $result = $this->db->query($sql);
                        $i =1;
                        foreach($result->result() as $a){ ?>
                  <li><a href="<?php echo base_url()."index.php/pages/detail_produk/detail_produk/".$a->idproduct;?>"><?php echo $a->nama;?></a></li>
                  <?php } ?>
                </ul>
              </div>
            </div>

            <div class="col-lg-3">
              <div class="single-widget widget-quick-links">
                <h5 class="widget-title">Proyek Kami</h5>
                <ul>
                  <li><a>Proyek Thinbed</a></li>
                  <li><a>Proyek Plester</a></li>
                  <li><a>Proyek Skim Coat</a></li>
                  <li><a>Proyek Perekat Kerammik</a></li>
                  <li><a>Proyek Perekat Granit</a></li>
                  <li><a>Proyek Render</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--// Footer Bottom Area -->

      <!-- Footer Copyright Area -->
      <div class="footer-copyright-area bg-blacks">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
              <div class="footer-copyright">
                <p> Copyright © <a href="index.html">CV. Anugerah Sukses Sejahtera </a>. All Rights Reserved </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--// Footer Copyright Area -->

        </div>
        <!--// Footer -->

    </div>
    <!--// Wrapper -->


    <!-- JS Files -->
    <script src="<?php echo base_url('assets/pages/js/vendor/jquery-3.2.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/pages/js/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/pages/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/pages/js/plugins.js'); ?>"></script>
    <script src="<?php echo base_url('assets/pages/js/active.js'); ?>"></script>
    <script src="<?php echo base_url('assets/pages/js/scripts.js'); ?>"></script>
</body>


<!-- Mirrored from d29u17ylf1ylz9.cloudfront.net/salina-v1/index-single-banner.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Jul 2018 06:43:02 GMT -->
</html>
