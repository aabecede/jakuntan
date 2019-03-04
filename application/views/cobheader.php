<!-- DOCTYPE -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- Viewport Meta Tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      Jakuntan.com
    </title>
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/responsive.css">
    <!--Fonts-->
    <link rel="stylesheet" media="screen" href="<?php echo base_url();?>assets/fonts/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" media="screen" href="<?php echo base_url();?>assets/fonts/simple-line-icons.css">    
     
    <!-- Extras -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/extras/owl/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/extras/owl/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/extras/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/extras/normalize.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/extras/settings.css">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/colors/green.css" media="screen" />       
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
    </script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js">
    </script>
    <![endif]-->
  </head>
  <body>

  <!-- Header area wrapper starts -->
    <header id="header-wrap">

      <!-- Roof area starts -->
      
      <!-- Roof area Ends -->

      <!-- Header area starts -->
      <section id="header">

        <!-- Navbar Starts -->
        <nav class="navbar navbar-light" data-spy="affix" data-offset-top="50">
          <div class="container">
            <button class='navbar-toggler hidden-md-up pull-xs-right' data-target='#main-menu' data-toggle='collapse' type='button'>
              ☰
            </button>
            <!-- Brand -->
            <a class="navbar-brand" href="index.html">
              <img src="assets/images/jakuntan-logo.png" alt="" class="img-fluid">
            </a>
            <div class="collapse navbar-toggleable-sm pull-xs-left pull-md-right" id="main-menu">
              <!-- Navbar Starts -->
              <ul class="nav nav-inline">
                <li class="nav-item dropdown">
                  <a class="nav-link active" href="<?php echo base_url();?>" role="button" aria-haspopup="true" aria-expanded="false">Beranda</a>                  
                </li>                                     
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Halaman
                  </a>
                  <div class="dropdown-menu">                      
                    <a class="dropdown-item" href="about-us.html">Tentang Kami</a>
                    <a class="dropdown-item" href="about-us.html">kontak</a>
                  </div>
                </li>             
                
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Foto Anggota
                  </a>                    
                   
                </li>
                
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Promo 
                  </a>
                   
                </li> 
<!-- pesan, nama pesan, logout -->
                <?php
                if(@$status == '2')
                {
                  ?>
                  <li class="nav-item dropdown">
                    <a class="nav-link active" href="<?php echo base_url('member/akuntan');?>" role="button" aria-haspopup="true" aria-expanded="false">
                      <img src="<?php echo base_url('assets/images/iconhome.png');?>" style="height: 20px;">
                    </a>
                  </li>
                  <?php
                    
                  if (@$query->username == true) {
                    ?>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                      <img src="<?php echo base_url('assets/images/pesan.png');?>" style="height: 20px;">
                      <span class="badge">9</span>
                    </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">
                          <div class="col-lg-3">
                            <img src="<?php echo base_url('assets/images/ade.png');?>" style="height: 40px;">
                          </div>
                          <div class="col-lg-9">
                            <p style="font-size: 12px;">Pesan . . . .</p>
                            <p style="font-size: 12px;">1 Menit yang lalu</p>
                          </div>
                        </a>

                        <a class="dropdown-item" href="#">Kris</a>
                      </div>
                    </li>

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <?php echo @$query->username;?>
                      </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?php echo base_url('datadiri');?>">Data Diri</a>
                        <?php
                        if(@$status == '1')
                        {
                          echo '<a class="dropdown-item" href="'.base_url('jasaku').'">Jasaku</a>';
                        }else{

                        }
                        echo '<a class="dropdown-item" href="'.base_url('logout').'">Logout</a>';
                        ?>
                      </div>
                    </li>
                    <?php
                  }
                }
                ?>         
                
                <!-- Search in right of nav -->
               <!-- <li class="nav-item" class="search">
                  <form class="top_search clearfix">
                    <div class="top_search_con">
                      <input class="s" placeholder="Search Here ..." type="text">
                      <span class="top_search_icon"><i class="icon-magnifier"></i></span>
                      <input class="top_search_submit" type="submit">
                    </div>
                  </form>
                </li>-->
                <!-- Search Ends -->                  
              </ul>  
            </div>              
              
          </div>
        </nav>
        <!-- Navbar Ends -->

      </section> 
  
    </header>
    <!-- Header-wrap Section End -->