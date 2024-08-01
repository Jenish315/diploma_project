<?php
    session_start();

?>
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
      <title>basco</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- awesome fontfamily -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="" /></div>
      </div>
      <!-- end loader -->
      <div id="mySidepanel" class="sidepanel">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
         <a href="index.php">Home</a>
         <a href="about.php">About</a>
         <a href="services.php">Services</a>
         <a href="contact.php">Contact</a>
         <a href="logout.php">Logout</a>
         <a href="delete.php">Delete Account</a>
        
         <?php if(isset($_SESSION['loggedin'])){
                  echo '<a href="welcome.php">Contact</a>';
               }
         ?>
      </div>
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="head-top">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-3">
                     <div class="logo">
                        <a href="index.php"><img src="images/logo_footer.png" /></a>
                     </div>
                  </div>
                  <div class="col-sm-9">
                     <ul class="email text_align_right">
                        <li class="d_none"> <i class="fa fa-map-marker" aria-hidden="true"></i>Location</a></li>
                        <li class="d_none"><i class="fa fa-phone" aria-hidden="true"></i>+91  982314141</a></li>
                        <li class="d_none"> <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>demo@gmail.com</a></li>
                        <?php if(isset($_SESSION['loggedin'])){
                           echo $_SESSION['username'];
                        }
                        else {
                           echo'<li><a href="login.php">LOGIN</a></li>';
                        }?>
                        <li class="d_none"><i class="fa fa-search" style="cursor: pointer;" aria-hidden="true"></i></li>
                        <li> <button class="openbtn" onclick="openNav()"><img src="images/menu_btn.png"></button></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header -->
      <!-- start slider section -->
      <div class=" banner_main">
         <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <div class="bg_white">
                           <h1>Welcome To our <span class="yello">Interior Design</span></h1>
                           <p>By the turn of the 20th century, amateur advisors and publications were increasingly challenging the monopoly that the large retail companies had on interior design. English feminist author Mary Haweis wrote a series of widely read essays in the 1880s in which she derided the eagerness with which aspiring middle-class people furnished their houses according to the rigid models offered to them by the retailers.[15] She advocated the individual adoption of a particular style, tailor-made to the individual needs and preferences of the customer:</p>
                        </div>
                        <a class="read_more ban_btn" href="Javascript:void(0)">Read More</a>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <div class="bg_white">
                           <h1>Welcome To our <span class="yello">Interior Design</span></h1>
<p>By the turn of the 20th century, amateur advisors and publications were increasingly challenging the monopoly that the large retail companies had on interior design. English feminist author Mary Haweis wrote a series of widely read essays in the 1880s in which she derided the eagerness with which aspiring middle-class people furnished their houses according to the rigid models offered to them by the retailers.[15] She advocated the individual adoption of a particular style, tailor-made to the individual needs and preferences of the customer:</p>
                        </div>
                        <a class="read_more ban_btn" href="Javascript:void(0)">Read More</a>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <div class="bg_white">
                           <h1>Welcome To our <span class="yello">Interior Design</span></h1>
<p>By the turn of the 20th century, amateur advisors and publications were increasingly challenging the monopoly that the large retail companies had on interior design. English feminist author Mary Haweis wrote a series of widely read essays in the 1880s in which she derided the eagerness with which aspiring middle-class people furnished their houses according to the rigid models offered to them by the retailers.[15] She advocated the individual adoption of a particular style, tailor-made to the individual needs and preferences of the customer:</p>                        </div>
                        <a class="read_more ban_btn" href="Javascript:void(0)">Read More</a>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
      </div>
      <!-- end slider section -->
      <!-- six_box-->
      <div id="about" class="about top_layer">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="titlepage">
                     <h2>About us</h2>
                     <p>It is a long established fact that a reader will be distracted by the readable content </p>
                  </div>
               </div>
               <div class=" col-sm-12">
                  <div class="about_box">
                     <div class="row d_flex">
                        <div class="col-md-5">
                           <div class="about_box_text">
                              <h3>Best INTERIOR Design</h3>
                              <p> Basco provide Best Interior Design For customer
                              </p>

                           </div>
                        </div>
                        <div class=" col-md-7  pppp">
                           <div class="about_box_img">
                              <figure><img src="images/about_img.png" alt="#" /></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end six_box-->
      <!-- building -->
      <div class="building">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>IF A BUILDING <br><span class="yello">BECOMES ARCHITECTURE <br></span> THEN IT IS ART</h2>
                     <p></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end building -->
      <!-- services -->
      <div class="services_main">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Services</h2>
                    
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12">
                  <ul class="nav nav-tabs md-tabs border_none" id="myTabMD" role="tablist">
                     <li class="nav-item lisertab">
                        <a class="nav-link servi_tab active" id="home-tab-md" data-toggle="tab" href="#home-md" role="tab" aria-controls="home-md"
                           aria-selected="true">RESIDENTAL</a>
                     </li>
                     <li class="nav-item lisertab">
                        <a class="nav-link servi_tab" id="profile-tab-md" data-toggle="tab" href="#profile-md" role="tab" aria-controls="profile-md"
                           aria-selected="false">RETAIL DESIGN</a>
                     </li>
                     <li class="nav-item lisertab">
                        <a class="nav-link servi_tab" id="contact-tab-md" data-toggle="tab" href="#contact-md" role="tab" aria-controls="contact-md"
                           aria-selected="false">SPACE ADAPTATION</a>
                     </li>
                  </ul>
                  <div class="tab-content card back_bg" id="myTabContentMD">
                     <div class="tab-pane fade show active" id="home-md" role="tabpanel" aria-labelledby="home-tab-md">
                        <div class="row">
                           <div class="col-md-4 col-sm-6 padding_0 margin_right20">
                              <div class="services">
                                 <div class="services_img">
                                    <figure><img src="images/service_img1.png" alt="#" />  </figure>
                                    <div class="ho_dist">
                                    
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4 col-sm-6 padding_0 margin_top70p margin_right20 margin_left20">
                              <div class="services">
                                 <div class="services_img">
                                    <figure><img src="images/service_img2.png" alt="#" />  </figure>
                                    <div class="ho_dist">
                                     
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4 col-sm-6 padding_0 margin_left20">
                              <div class="services">
                                 <div class="services_img">
                                    <figure><img src="images/service_img3.png" alt="#" />  </figure>
                                    <div class="ho_dist">
                                 
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4 offset-md-8 col-sm-6 padding_0 margin_top170">
                              <div class="services margin_left60">
                                 <div class="services_img">
                                    <figure><img src="images/service_img4.png" alt="#" />  </figure>
                                    <div class="ho_dist">
                                       <span>Reader will be distracted</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-6 margin_top40">
                              <a class="read_more " href="Javascript:void(0)">Read More</a>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="profile-md" role="tabpanel" aria-labelledby="profile-tab-md">
                        <div class="row">
                           <div class="col-md-4 col-sm-6 padding_0 margin_right20">
                              <div class="services">
                                 <div class="services_img">
                                    <figure><img src="images/service_img3.png" alt="#" />  </figure>
                                    <div class="ho_dist">
                                       <span>Reader will be distracted</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4 col-sm-6 padding_0 margin_top70p margin_right20 margin_left20">
                              <div class="services">
                                 <div class="services_img">
                                    <figure><img src="images/service_img2.png" alt="#" />  </figure>
                                    <div class="ho_dist">
                                       <span>Reader will be distracted</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4 col-sm-6 padding_0 margin_left20">
                              <div class="services">
                                 <div class="services_img">
                                    <figure><img src="images/service_img4.png" alt="#" />  </figure>
                                    <div class="ho_dist">
                                       <span>Reader will be distracted</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4 offset-md-8 col-sm-6 padding_0 margin_top170">
                              <div class="services margin_left60">
                                 <div class="services_img">
                                    <figure><img src="images/service_img1.png" alt="#" />  </figure>
                                    <div class="ho_dist">
                                       <span>Reader will be distracted</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-6 margin_top40">
                          
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="contact-md" role="tabpanel" aria-labelledby="contact-tab-md">
                        <div class="row">
                           <div class="col-md-4 col-sm-6 padding_0 margin_right20">
                              <div class="services">
                                 <div class="services_img">
                                    <figure><img src="images/service_img4.png" alt="#" />  </figure>
                                    <div class="ho_dist">
                                       <span>Reader will be distracted</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4 col-sm-6 padding_0 margin_top70p margin_right20 margin_left20">
                              <div class="services">
                                 <div class="services_img">
                                    <figure><img src="images/service_img2.png" alt="#" />  </figure>
                                    <div class="ho_dist">
                                       <span>Reader will be distracted</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4 col-sm-6 padding_0 margin_left20">
                              <div class="services">
                                 <div class="services_img">
                                    <figure><img src="images/service_img1.png" alt="#" />  </figure>
                                    <div class="ho_dist">
                                       <span>Reader will be distracted</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4 offset-md-8 col-sm-6 padding_0 margin_top170">
                              <div class="services margin_left60">
                                 <div class="services_img">
                                    <figure><img src="images/service_img3.png" alt="#" />  </figure>
                                    <div class="ho_dist">
                                       <span>Reader will be distracted</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-6 margin_top40">
                              <a class="read_more " href="Javascript:void(0)">Read More</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end services -->
      <!-- instant -->
      <div class="instant">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6">
                  <div class="titlepage text_align_left">
                     <h2>Get an instant estimate</h2>
                     <p>Hello@gmailcom</p>
                     <a class="read_more" href="Javascript:void(0)">Get A quote</a>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="instant_img">
                     <figure><img src="images/pc.png" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end instant -->
      <!-- footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-10 offset-md-1">
                     <ul class="social_icon text_align_center">
                        <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                        <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li> <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                        <li> <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
                  <div class="col-md-4 col-sm-6">
                     <div class="reader">
                        <a href="index.php"><img src="images/logo_footer.png" alt="#"/></a>
                        <p class="padd_flet40"></p>
                     </div>
                  </div>
                  <div class="col-md-2 col-sm-6">
                     <div class="reader">
                        <h3>Explore</h3>
                        <ul class="xple_menu">
                           <li><a href="index.php">Home</a></li>
                           <li><a href="about.php">About</a></li>
                           <li><a href="services.php">Services</a></li>
                           <li><a href="contact.php">Contact Us</a></li>
                           <li><a href="logout.php">Logout</a></li>
                           <li><a href="delete.php">Delete Account</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                     <div class="reader">
                        <h3>Recent Posts</h3>
                        <ul class="re_post">
                           <li><img src="images/re_img1.jpg" alt="#"/></li>
                           <li><img src="images/re_img2.jpg" alt="#"/></li>
                           <li><img src="images/re_img3.jpg" alt="#"/></li>
                           <li><img src="images/re_img4.jpg" alt="#"/></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                     <div class="reader">
                        <h3>Contact Us</h3>
                        <p> Hello@gmail.com<br>Demo@gmail.com</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright text_align_center">
               <div class="container">
                  <div class="row">
                     <div class="col-md-10 offset-md-1">
                        <p>Copyright 2020 All Right Reserved By <a href="https://html.design/"> Free Html Template</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
   </body>
</html>
