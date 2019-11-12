<?php
    

    $username = "";
    $email    = "";
    $errors = array(); 

    // connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'titipkuy');

    // REGISTER USER
    if (isset($_POST['reg_user'])) {
      // receive all input values from the form
      $username = mysqli_real_escape_string($db, $_POST['username']);
      $email = mysqli_real_escape_string($db, $_POST['user-email']);
  }
    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM user WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['username'] === $username) {
          array_push($errors, "Username already exists");
        }

        if ($user['email'] === $email) {
          array_push($errors, "Email already exists");
        }
    }
    /* free result set */

?>

<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Register</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- tab icon -->
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
        <div>

        </div>
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
        <!-- header end -->
        
            
        <!-- register-area start -->
        
        <div class="register-area ptb-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-12 col-lg-12 col-xl-6 ml-auto mr-auto">
                        <div class="login">
                            <div class="login-form-container">
                                <div class="login-form">
                                    <form name = "vform" action="index.php" method="POST" onsubmit="return Validate()">
                                          
                                            <div align="center">
                                                Register
                                                <p>
                                            </div>
                                        <div id = "email_div">
                                            <input type="email" name="user-email" placeholder="Email Address" >
                                            <div id="email_error"></div>
                                        </div>
                                        <div id = "name_div">
                                            <input type="name" name="user-fullName" placeholder="Full Name">
                                            <div id="name_error"></div>
                                        </div>
                                        <div id = "username_div">
                                            <input type="text" name="username" placeholder="Username" >
                                            <div id="username_error"></div>
                                        </div>
                                        <div id = "password_div">
                                            <input type="password" name="user-password" placeholder="Password">
                                            <div id="password_error"></div>
                                        </div>
                                        <div id = "cardNumber_div">
                                            <input type="cardNumber" name="user-cardNumber" placeholder="Card Number">
                                            <div id="cardNumber_error"></div>
                                        </div>
                                        <div id = "address_div">
                                            <input type="address" name="user-address" placeholder="Address">
                                            <div id="address_error"></div>
                                        </div>

                                        
                                        <div class="button-box">
                                            <button name = "submit_btn" type="submit" class="default-btn floatright">Register</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- register-area end -->
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

    <script>
            
            // validation function
            function Validate() {
           
            var name = document.forms['vform']['user-fullName'];
            var username = document.forms['vform']['username'];
            var email = document.forms['vform']['user-email'];
            var password = document.forms['vform']['user-password'];
            var cardNumber = document.forms['vform']['user-cardNumber'];
            var address = document.forms['vform']['user-address'];
           
            // SELECTING ALL ERROR DISPLAY ELEMENTS
            var name_error = document.getElementById('name_error');
            var username_error = document.getElementById('username_error');
            var email_error = document.getElementById('email_error');
            var password_error = document.getElementById('password_error');
            var cardNumber_error = document.getElementById('cardNumber_error');
            var address_error = document.getElementById('address_error');
            // SETTING ALL EVENT LISTENERS
            email.addEventListener('input', emailVerify);
            name.addEventListener('input', fnameVerify);
            username.addEventListener('input', nameVerify);
            password.addEventListener('input', passwordVerify);
            cardNumber.addEventListener('input', cardNumberVerify);
            address.addEventListener('input', addressVerify);
            // validate email
            if (email.value == "") {
                email.style.border = "1px solid red";
                document.getElementById('email_div').style.color = "red";
                email_error.textContent = "Email is required";
                email.focus();
                return false;
            }
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if(!email.value.match(mailformat)) {

                email.style.border = "1px solid red";
                document.getElementById('email_div').style.color = "red";
                email_error.textContent = "Email is invalid";
                email.focus();
                return false;
            }

            // validate fullname
            if(name.value == "") {
                name.style.border = "1px solid red";
                document.getElementById('name_div').style.color = "red";
                name_error.textContent = "Full name is required";
                name.focus();
                return false;
            }
            var letters = /^[A-Za-z]+$/;
            if(!name.value.match(letters)) {
                name.style.border = "1px solid red";
                document.getElementById('name_div').style.color = "red";
                name_error.textContent = "Full name must be alphabetical";
                name.focus();
                return false;
            }
        
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
              if (cardNumber.value == "") {
                cardNumber.style.border = "1px solid red";
                document.getElementById('cardNumber_div').style.color = "red";
                cardNumber_error.textContent = "Card number is required";
                cardNumber.focus();
                return false;
              }
              var numbers = /^[0-9]+$/;
              if (!cardNumber.value.match(numbers)) {
                cardNumber.style.border = "1px solid red";
                document.getElementById('cardNumber_div').style.color = "red";
                cardNumber_error.textContent = "Card number must be numerical";
                cardNumber.focus();
                return false;
              }

              // validate address
              if (address.value == "") {
                address.style.border = "1px solid red";
                document.getElementById('address_div').style.color = "red";
                address_error.textContent = "Address is required";
                address.focus();
                return false;
              }
              
              var alphanum = /^[0-9a-zA-Z]+$/;
              if (!address.value.match(alphanum)) {
                address.style.border = "1px solid red";
                document.getElementById('address_div').style.color = "red";
                address_error.textContent = "Address must be alphanumeric";
                address.focus();
                return false;
              }
              
            if(!hasNumber(address.value)) {
                address.style.border = "1px solid red";
                document.getElementById('address_div').style.color = "red";
                address_error.textContent = "Address must contain at least a number";
                address.focus();
                return false;
              }
              return true;
            // event handler functions
            
            function hasNumber(myString) {
              return /\d/.test(myString);
            }

            function cardNumberVerify() {
              if (cardNumber.value != "" && cardNumber.value.match(numbers)) {
               cardNumber.style.border = "1px solid #5e6e66";
               document.getElementById('cardNumber_div').style.color = "#5e6e66";
               cardNumber_error.innerHTML = "";
               
              }
            }
            function addressVerify() {
              if (address.value != "" && address.value.includes(numbers)) {
               address.style.border = "1px solid #5e6e66";
               document.getElementById('address_div').style.color = "#5e6e66";
               address_error.innerHTML = "";
              
              }
            }
            function fnameVerify() {
              if (name.value != "" && name.value.match(letters)) {
               name.style.border = "1px solid #5e6e66";
               document.getElementById('name_div').style.color = "#5e6e66";
               name_error.innerHTML = "";
              
              }
            }
            function nameVerify() {
              if (username.value != "" && username.value.length > 1) {
               username.style.border = "1px solid #5e6e66";
               document.getElementById('username_div').style.color = "#5e6e66";
               username_error.innerHTML = "";
               return;
              }
            }
            function emailVerify() {
              if (email.value != "" && email.value.match(mailformat)) {
                email.style.border = "1px solid #5e6e66";
                document.getElementById('email_div').style.color = "#5e6e66";
                email_error.innerHTML = "";
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
