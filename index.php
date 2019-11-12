<?php
   include("connect.php");
   session_start();
    if(isset($_SESSION['success']))
    {
        echo $_SESSION['success'];
    }
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT userId FROM user WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
        
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: home.php");
      }else {
         $error = "Your Login Name or Password is invalid";
         echo "<script type='text/javascript'>alert('$error');</script>";
      }
   }
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/ico.png">
		
		<!-- all css here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/pe-icon-7-stroke.css">
        <link rel="stylesheet" href="assets/css/icofont.css">
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="assets/css/bundle.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- header start -->
        <header>
            <div class="header-top-furniture wrapper-padding-2 res-header-sm">
                <div class="container-fluid">
                    <div class="header-bottom-wrapper">
                        <div class="logo-2 furniture-logo ptb-30">
                            <a href="index.php">
                                <img src="assets/img/logo/2.png" alt="" style="width: 167px">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
           
        </header>
        <!-- header end -->

        <!-- login-area start -->
        <div class="register-area ptb-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-12 col-lg-6 col-xl-6 ml-auto mr-auto">
                        <div class="login">
                            <div class="login-form-container">
                                <div class="login-form">
                                    <form name = "login-form" action="home.php" method="POST" onsubmit="return Validate()">
                                            <div align="center">
                                                Login
                                                <p>
                                            </div>
                                      <div id = "username_div">
                                            <input type="text" name="username" placeholder="Username" >
                                            <div id="username_error"></div>
                                        </div>
                                        <div id = "password_div">
                                            <input type="password" name="user-password" placeholder="Password">
                                            <div id="password_error"></div>
                                        </div>
                                        <div class="button-box">
                                            <button type="submit" class="default-btn floatright">Login</button>
                                        </div>
                                        <a href="register.php"> Need an Account? Click Here </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- login-area end -->
		<footer class="footer-area">
            <div class="footer-top-area bg-img pt-105 pb-65" style="background-image: url(assets/img/bg/1.jpg)" data-overlay="9">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-lg-4">
                            <div class="footer-widget mb-40">
                                <h3 class="footer-widget-title">Address</h3>
                                <div class="footer-contact">
                                    <p><span><i class="ti-location-pin"></i></span> 77 Seventh avenue USA 12555. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="footer-widget mb-40">
                                
                            </div>
                        </div>


                        <div class="col-lg-4">
                            <div class="footer-widget mb-40">
                                <h3 class="footer-widget-title">Customer Service</h3>
                                    
                                <div class="footer-contact">
                                    
                                    <p><span><i class=" ti-headphone-alt "></i></span> +88 (015) 609735 or +88 (012) 112266</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom black-bg ptb-20">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="copyright">
                                <p>
                                    Copyright ©
                                    <a href="https://hastech.company/">HasTech</a> 2018 . All Right Reserved.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
		
		
		
		<!-- all js here -->
        <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/ajax-mail.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
     // validate script
    <script>
            // validation function
            function Validate() {
           
           
            var username = document.forms['login-form']['username'];
            var password = document.forms['login-form']['user-password'];
            
           
            // SELECTING ALL ERROR DISPLAY ELEMENTS
            var username_error = document.getElementById('username_error');
            var password_error = document.getElementById('password_error');
            
            // SETTING ALL EVENT LISTENERS
           
            username.addEventListener('input', nameVerify);
            password.addEventListener('input', passwordVerify);
           
           
              // validate username
              if (username.value == "") {
                username.style.border = "1px solid red";
                document.getElementById('username_div').style.color = "red";
                username_error.textContent = "Username is required";
                username.focus();
                return false;
              }
              // validate username
              if (username.value.length < 2) {
                username.style.border = "1px solid red";
                document.getElementById('username_div').style.color = "red";
                username_error.textContent = "Username must be at least 2 characters";
                username.focus();
                return false;
              }
              
              // validate password
              if (password.value == "") {
                password.style.border = "1px solid red";
                document.getElementById('password_div').style.color = "red";
                password_error.textContent = "Password is required";
                password.focus();
                return false;
              }
              if (password.value.length < 6) {
                password.style.border = "1px solid red";
                document.getElementById('password_div').style.color = "red";
                password_error.textContent = "Password must be at least 6 characters";
                password.focus();
                return false;
              }

              // validate cardNumber
             
            // event handler functions
            
           
            
            function nameVerify() {
              if (username.value != "" && username.value.length > 1) {
               username.style.border = "1px solid #5e6e66";
               document.getElementById('username_div').style.color = "#5e6e66";
               username_error.innerHTML = "";
               return;
              }
            }
            
            function passwordVerify() {
              if (password.value != "" && password.value.length > 5) {
                password.style.border = "1px solid #5e6e66";
                document.getElementById('password_div').style.color = "#5e6e66";
                password_error.innerHTML = "";
                
              }
            }
           
            }
        </script>
</html>
