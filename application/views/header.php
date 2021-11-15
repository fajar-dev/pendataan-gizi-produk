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
        <title><?php echo $title ?></title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- site icon -->
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
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
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="dashboard dashboard_1">
        <div class="full_container">
            <div class="inner_container">
                <!-- Sidebar  -->
                <nav id="sidebar">
                <div class="sidebar_blog_1">
                    <div class="sidebar-header">
                        <div class="logo_section">
                            <a href="index.html"><img class="logo_icon img-responsive" src="images/logo/logo_icon.png" alt="#" /></a>
                        </div>
                    </div>
                    <div class="sidebar_user_info">
                        <div class="icon_setting"></div>
                        <div class="user_profle_side">
                            <div class="user_img"><img class="img-responsive" src="<?php echo base_url() ?>assets/images/layout_img/user_img.jpg" alt="#" /></div>
                            <div class="user_info">
                            <h6><?php echo $this->session->userdata('nama'); ?></h6>
                            <p>(
                              <?php if($this->session->userdata('level') == 1){
                                  echo 'Admin';
                                }else{
                                  echo 'User';
                                }
                              ?>
                            )</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar_blog_2">
                    <h4>Menu</h4>
                    <ul class="list-unstyled components">
                            <?php if($this->session->userdata('level') == 1){
                                  echo '
                                    <li>
                                        <a href="'.base_url().'page"><i class="fa fa-product-hunt orange_color"></i> <span>Produk</span></a>
                                    </li>
                                    <li>
                                        <a href="'.base_url().'page/tambah"><i class="fa fa-plus green_color"></i> <span>Tambah Produk</span></a>
                                    </li>
                                    <li>
                                        <a href="'.base_url().'page/cetak"><i class="fa fa-print blue2_color"></i> <span>Cetak</span></a>
                                    </li>
                                    <li>
                                        <a href="'.base_url().'page/pengguna"><i class="fa fa-user purple_color"></i> <span>Pengguna</span></a>
                                    </li>
                                    <li>
                                        <a href="'.base_url().'auth/logout"><i class="fa fa-sign-out red_color"></i> <span>Logout</span></a>
                                    </li>
                                  ';
                                }else{
                                  echo '
                                    <li>
                                        <a href="'.base_url().'page"><i class="fa fa-product-hunt orange_color"></i> <span>Produk</span></a>
                                    </li>
                                    <li>
                                        <a href="'.base_url().'page/cetak"><i class="fa fa-print blue2_color"></i> <span>Cetak</span></a>
                                    </li>
                                    <li>
                                        <a href="'.base_url().'auth/logout"><i class="fa fa-sign-out red_color"></i> <span>Logout</span></a>
                                    </li>
                                  ';
                                }
                            ?>
                    </ul>
                </div>
                </nav>
                <!-- end sidebar -->
                <!-- right content -->
                <div id="content">
                <!-- topbar -->
                <div class="topbar">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="full">
                            <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                            <div class="right_topbar">
                            <div class="icon_info">
                                <ul class="user_profile_dd">
                                    <li>
                                        <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="<?php echo base_url() ?>assets/images/layout_img/user_img.jpg" alt="#" /><span class="name_user"><?php echo $this->session->userdata('nama'); ?></span></a>
                                        <div class="dropdown-menu">
                                        <a class="dropdown-item" href="<?php echo base_url() ?>auth/logout"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- end topbar -->
                <!-- dashboard inner -->
                <div class="midde_cont">
                    <div class="container-fluid">
                        <div class="row column_title">
                            <div class="col-md-12">
                            <div class="page_title">
                                <h2><?php echo $title ?></h2>
                            </div>
                            </div>
                        </div>