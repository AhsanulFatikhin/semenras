<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from d29u17ylf1ylz9.cloudfront.net/salina-v1/index-single-banner.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Jul 2018 06:42:46 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PT Anugerah Sukses Sejahtera Jaya Sentosa</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <link href="<?php echo base_url('assets/pages/images/favicon.ico') ?>"   rel="shortcut icon" >
    <link href="<?php echo base_url('assets/pages/images/icon.png') ?>"  rel="apple-touch-icon">

    <!-- Google font (font-family: 'Lato', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,900" rel="stylesheet">
    <!-- Google font (font-family: 'Raleway', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,800" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="<?php echo base_url('assets/pages/css/bootstrap.min.css') ?>"  rel="stylesheet">
    <link href="<?php echo base_url('assets/pages/css/bootstrap.css') ?>"  rel="stylesheet">
    <link href="<?php echo base_url('assets/pages/css/bootstrap.min.css') ?>"  rel="stylesheet">
    <link href="<?php echo base_url('assets/pages/css/bootstrap-grid.css') ?>"  rel="stylesheet">
    <link href="<?php echo base_url('assets/pages/css/bootstrap-grid.min.css') ?>"  rel="stylesheet">
    <link href="<?php echo base_url('assets/pages/css/bootstrap-reboot.css') ?>"  rel="stylesheet">
    <link href="<?php echo base_url('assets/pages/css/bootstrap-reboot.min.css') ?>"  rel="stylesheet">
    <link href="<?php echo base_url('assets/pages/css/custom.css') ?>"  rel="stylesheet">
    <link href="<?php echo base_url('assets/pages/css/plugins.css') ?>"  rel="stylesheet">
    <link href="<?php echo base_url('assets/pages/style.css') ?>"  rel="stylesheet">

    <!-- Cusom css -->
    <link href="<?php echo base_url('assets/pages/css/custom.css') ?>"  rel="stylesheet">

    <!-- Modernizer js -->
  <script src="<?php echo base_url('assets/pages/js/vendor/modernizr-3.5.0.min.js') ?>"></script>
  
</head>
<body>
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!-- Add your site or application content here -->

    <div class="fakeloader"></div>

    <!-- Wrapper -->
    <div id="wrapper" class="wrapper">
        
        <!-- Header -->
        <div class="header header-style-1 sticky-header">

      <!-- Header Top Area -->
      <div class="header-top-area bg-dark">
        <div class="container">
          <div class="header-top-area-inner">
          </div>
        </div>
      </div>
      <!--// Header Top Area -->

      <!-- Header Bottom Area -->
      <div class="header-bottom-area d-none d-lg-block bg-dark" style="padding-top: 15px; padding-bottom: 19px;">
        <div class="container">
          <div class="header-inner d-none d-lg-flex">
            <a href="#" class="logo">
              <?php 
                    $sql = "select * from foto_header limit 1";
                    $result = $this->db->query($sql);
                    foreach($result->result() as $d){ ?>
              <img src="<?php echo base_url('assets/foto_logo_header/'.$d->foto);?>" alt="logo theme">
               <?php } ?>
              <h4 style="padding-left: 13px; padding-top: 15px;"><b>PT Anugerah Sukses Sejahtera Jaya Sentosa</b></h4>
            </a>
            <!-- Nagivation -->
            <nav class="sa-navigation text-right">
              <ul>
                <li><a href="<?php echo site_url('home/index') ?>">Home</a></li>
                <li><a href="<?php echo site_url('pages/produk/produk') ?>" class="nav-link">Produk</a></li>
                <li><a class="nav-link"">Proyek</a></li>
                <li><a href="<?php echo site_url('pages/profil/profil') ?>">Tentang Kami</a></li>
                <li><a href="<?php echo site_url('pages/kontak/kontak') ?>">Kontak Kami</a></li>                                     
              </ul>
            </nav>
            <!--// Nagivation -->

          </div>
        </div>
      </div>
      <!--// Header Bottom Area -->
    </div>
        <!--// Header -->
<div class="mobile-menu-wrapper d-block d-lg-none bg-dark">
        <div class="container">
          <div class="mobile-menu">
            <a href="index.html" class="logo">
              <?php 
                    $sql = "select * from foto_header_mobile limit 1";
                    $result = $this->db->query($sql);
                    foreach($result->result() as $d){ ?>
              <img src="<?php echo base_url('assets/foto_logo_header_mobile/'.$d->foto);?>" alt="logo theme">
               <?php } ?>
            </a>
          </div>
        </div>
      </div>
      <!--// Mobile Menu -->

        </div>
