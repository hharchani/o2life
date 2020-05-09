<?php
include 'connect.inc.php';

?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="dark.css" type="text/css" />
	<link rel="stylesheet" href="font-icons.css" type="text/css" />
	<link rel="stylesheet" href="animate.css" type="text/css" />
	<link rel="stylesheet" href="magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="plugins.js"></script>

	<!-- Document Title
	============================================= -->
	<title>O2Life | Login and Registration</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header">

			<div id="header-wrap">

				<div class="container clearfix">
					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
			<a href="index.html" class="standard-logo" data-dark-logo="logo.svg"><img src="logo.svg" alt="Canvas Logo"></a>

						<a href="index.html" class="retina-logo" data-dark-logo="logo.svg"><img src="logo.svg" alt="Canvas Logo"></a>
					</div>
				</div>

			</div>

		</header><!-- #header end -->

	
		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="accordion accordion-lg divcenter nobottommargin clearfix" style="max-width: 550px;">

						<div class="acctitle"><i class="acc-closed icon-lock3"></i><i class="acc-open icon-unlock"></i>Login to your Account</div>
						<div class="acc_content clearfix">
							<form id="login-form" name="login-form" class="nobottommargin" action="db-signin.php" method="post">
								<div class="col_full">
									<label for="login-form-username">Username:</label>
									<input type="text" id="login-form-username" name="login-form-username" value="" class="form-control" required/>
								</div>

								<div class="col_full">
									<label for="login-form-password">Password:</label>
									<input type="password" id="login-form-password" name="login-form-password" value="" class="form-control" />
								</div>

								<div class="col_full nobottommargin">
									<button class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" value="login">Login</button>
								</div>
							</form>
						</div>

						<div class="acctitle"><i class="acc-closed icon-user4"></i><i class="acc-open icon-ok-sign"></i>New Signup? Register for an Account</div>
						<div class="acc_content clearfix">
							<form id="register-form" name="register-form" class="nobottommargin" action="db-signup.php" method="post">
								<div class="col_full">
									<label for="register-form-name">Name:</label>
									<input type="text" id="register-form-name" name="register-form-name" value="" class="form-control" required />
								</div>

								<div class="col_full">
									<label for="register-form-email">Email Address:</label>
									<input type="text" id="register-form-email" name="register-form-email" value="" class="form-control" required />
								</div>

								<div class="col_full">
									<label for="register-form-username">Choose a Username: *****  </label>
									<input type="text" id="register-form-username" name="register-form-username" value="" class="form-control" required />
								</div>

								<div class="col_full">
									<label for="register-form-phone">Phone:</label>
									<input type="text" id="register-form-phone" name="register-form-phone" value="" class="form-control" required />
								</div>

								<div class="col_full">
									<label for="register-form-password">Choose Password:</label>
									<input type="password" id="register-form-password" name="register-form-password" value="" class="form-control" required/>
								</div>

								<div class="col_full">
									<label for="register-form-repassword">Re-enter Password:</label>
									<input type="password" id="register-form-repassword" name="register-form-repassword" value="" class="form-control" required />
								</div>

								<div class="col_full nobottommargin">
									<button class="button button-3d button-black nomargin" id="register-form-submit" name="register-form-submit" value="register" >Register Now</button>
								</div>
							</form>
						</div>

					</div>

				</div>

			</div>

		</section><!-- #content end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="functions.js"></script>
<!--	<script>
            $('#login-form').on('submit',function(e){
            e.preventDefault();
           // alert('sadsagffsdgh');
            username = document.getElementById("login-form-username").value;
            password = document.getElementById("login-form-password").value;
            if(username.length==0 || password.length==0)
            {
            	alert('Please enter Both username and password');
            	//document.getElementById("userpassreq").style.display = "block";
            }
            else
            {
                $.ajax({
                    type : "POST",
                    url : "login-2.php",    
                    data:{
                            username: username,
                            password: password
                        },
                        success: function(html){
                        if(html=='true')
                        {
                            $(location).attr('href','Login-company-next-new.php');
                            //alert('Logged In');
                        }
                        else if(html=='dont_match')
                        {
                            alert('Username and password do not match');
                        }
                        else if(html=='exist')
                        {
                            alert('Username does not exist');
                        }
                        /* else if(html=='email_not')
                        {
                            alert('Your email address is not confirmed till now');
                        } */
                        else if(html=='not_confirmed')
                        {
                            alert('Please check your email to confirm your account');       
                        }
                       // alert(html);
                    }       
                });
                return false;
              }
        });
    </script> 
-->
</body>
</html>