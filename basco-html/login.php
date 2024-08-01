<?php
    $login= "False";
    $showError = "False";
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        include 'db_connect.php';
        $username = $_POST['name'];
        $mail= $_POST['email'];
        $password = $_POST['password'];

        
        $query = "Select number from users where name = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $query);
        $num = mysqli_num_rows($result);
        $rows = mysqli_fetch_row($result);
        if($num == 1){
            $login = "True";
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['mail'] = $mail;
            header("location: welcome.php");

        }
        else{
            $showError = "Invalid Credentials";
        }
        
    }
?>
<html>
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
                        <li class="d_none"><i class="fa fa-phone" aria-hidden="true"></i>+91 983884823</a></li>
                        <li class="d_none"> <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>demo@gmail.com</a></li>
                        <li class="d_none"> <a href="#">Login <i class="fa fa-user" aria-hidden="true"></i></a> </li>
                        <li class="d_none"><i class="fa fa-search" style="cursor: pointer;" aria-hidden="true"></i></li>
                        <li> <button class="openbtn" onclick="openNav()"><img src="images/menu_btn.png"></button></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header -->
      <form action="login.php" method = "POST">
         <h1 class="contact_text">Login | <a href="signin.php">Sign up</a></h1>
         <br>
         <br>
                  <!-- 
                  <div class="mail_sectin">
                    <input type="text" class="email-bt" placeholder="Name" name="name">
                    <input type="text" class="email-bt" placeholder="Email" name="email">
                    <input type="password" class="email-bt" placeholder="Password" name="password">
                    <a href="forget.php">Forgot Password</a>
                    <div class="send_bt"><button type="submit" name ="submit">Login</button></div>
                  </div>
                  </form> -->
                    <form class="main_form">
                     <div class="row">
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7">
                           
                           <input class="form-control" placeholder="Name" type="text" name="name">
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7">
                           <input class="form-control" placeholder="Email" type="text" name="email">
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7">
                           <input class="form-control" placeholder="password" type="password" name="password">
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7">
                        <a href="forget.php">Forgot Password</a></div>
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7">
                           <button type="submit" name="submit"class="send">Login</button>
                        </div>
                     </div>
                  </form>
      
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
