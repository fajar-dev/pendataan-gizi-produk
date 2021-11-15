<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Login</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="<?php echo base_url() ?>assets/images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/custom.css" />
      <!-- calendar file css -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/js/semantic.min.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="inner_page login">
   <?php echo $this->session->flashdata('msg') ?>
      <div class="full_container">
         <div class="container">
            <div class="center verticle_center full_height">
               <div class="login_section">
                  <div class="logo_login">
                     <div class="center">
                        <h3 class="text-white text-center">Sistem informasi <br> kadar gizi makanan</h3>
                     </div>
                  </div>
                  <div class="login_form">
                     <h4 class="text-center mb-4">MASUK</h4>
                     <form action="<?php echo base_url() ?>auth/proses_login" method="post">
                        <fieldset>
                           <div class="field">
                              <label class="label_field">Email </label>
                              <input type="email" name="email" placeholder="E-mail"  required/>
                           </div>
                           <div class="field">
                              <label class="label_field">Password</label>
                              <input type="password" name="password" placeholder="Password" required />
                           </div>
                           <div class="field my-5">
                              <button type="submit" class="main_bt w-100">masuk</button>
                           </div>
                           <div class="text-center">
                              <a class="text-center" href="<?php echo base_url() ?>auth/daftar">Belum Memiliki akun? <b>DAFTAR</b></a>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
      <script src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
      <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="<?php echo base_url() ?>assets/js/animate.js"></script>
      <!-- select country -->
      <script src="<?php echo base_url() ?>assets/js/bootstrap-select.js"></script>
      <!-- nice scrollbar -->
      <script src="<?php echo base_url() ?>assets/js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="<?php echo base_url() ?>assets/js/custom.js"></script>
   </body>
</html>