<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/libs/bootstrap/css/bootstrap.min.css" >

  
    <!-- Fontawsome css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/libs/fontawesome/css/all.min.css" />

    
    <!-- link app.css -->
    <link rel="stylesheet" href="./assets/css/app.css" />

    <title><?= isset($title) ? $title:'CIShop' ?></title>
  </head>
  <body>
      <!-- Navbar -->
  <?php $this->load->view('layouts/_navbar'); ?>
  <!-- End Navbar -->
    

    <!-- Content -->


   <?php $this->load->view($page); ?>

    <!-- End Contend -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url(); ?>/assets/libs/jquery/jquery.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="<?php echo base_url(); ?>/assets/libs/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>

