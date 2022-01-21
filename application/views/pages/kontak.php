<!-- Page Content -->
        <main id="page-content">

      <!-- Contact Page -->
      <section class="contact-page-top-area bg-white section-padding-sm">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-12">
              <div class="section-title section-title-2 text-center">
                <h2>KONTAK KAMI</h2>
                <p>Pusat Layanan Pelanggan.<br>Hubungi kami di pusat panggilan kami dengan rincian kontak dan nomor yang tercantum di bawah ini.</p>
              </div>
            </div>
          </div>
          <?php 
              $sql = "select * from pabrik limit 1";
              $result = $this->db->query($sql);
              foreach($result->result() as $d){ ?>
          <div class="row">

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="contact-infobox text-center">
                <span class="contact-infobox-icon"><i class="pe-7s-map-marker"></i></span>
                <h6>Alamat</h6>
                <p><?php echo $d->alamat;?></p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="contact-infobox text-center">
                <span class="contact-infobox-icon"><i class="pe-7s-call"></i></span>
                <h6>Telepon Kantor</h6>
                <p><?php echo $d->telfon;?></p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="contact-infobox text-center">
                <span class="contact-infobox-icon"><i class="pe-7s-mail"></i></span>
                <h6>Alamat Email</h6>
                <p><?php echo $d->email;?></p>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </section>
      <!--// Contact Page -->

      <!-- Contact Page Form --
      <section class="contact-page-bottom-area bg-grey section-padding-sm">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-12">
              <div class="section-title section-title-2 text-center">
                <h2>KRITIK dan SARAN</h2>
              </div>
            </div>
          </div>
          <form action="https://d29u17ylf1ylz9.cloudfront.net/salina-v1/mail.php" method="post" id="contact-form" class="contact-page-form">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12 mt-30">
                <input type="text" name="name" placeholder="Your Name">
              </div>
              <div class="col-lg-6 col-md-6 col-12 mt-30">
                <input type="email" name="email" placeholder="Your email">
              </div>
              <div class="col-12 mt-30">
                <input type="text" name="subject" placeholder="Subject">
              </div>
              <div class="col-lg-12 col-12 mt-30">
                <textarea name="message" cols="30" rows="7" placeholder="Message"></textarea>
              </div>
              <div class="col-lg-12 col-12 mt-30 text-center">
                <button type="submit" class="cr-btn mt-30">
                  <span>Send message <i class="fa fa-angle-right"></i></span>
                </button>
              </div>
            </div>
          </form>
          <p class="form-message"></p>
        </div>
      </section>
      <!--// Contact Page Form -->
    
        </main>
        <!--// Page Content -->
