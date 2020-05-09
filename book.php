<?php
include 'connect.inc.php';

if(!isset($_SESSION["username"]))
{

 header('Location: 404-1.html');
 
 }
 ?>
 
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
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
	<title>O2Life | Bookings</title>

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
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">
						<ul>	
							<li><a href="#"><div>Hello,<?php echo $_SESSION["username"];?></div></a></li>
							<li><a href="userpage.php"><div>Orders Page</div></a></li>
							<li><a href="logout.php"><div>Logout</div></a></li>
						</ul>			
					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->



	
						
						

	<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="tabs divcenter nobottommargin clearfix" id="tab-login-register" style="max-width: 500px;">

						  <ul class="tab-nav tab-nav2 center clearfix">
                           <!-- <li class="inline-block"><a href="#tab-login">Login</a></li>-->
                            <li class="inline-block"><a href="#tab-register">Water Booking Details</a></li>
                        </ul>
                   <br>
                            <div class="tab-content clearfix" id="tab-register">
                                <div class="panel panel-default nobottommargin">
                                	<div class="panel-body" style="padding: 40px;">
                                		

                                		<form id="register-form" name="register-form" class="nobottommargin" action="save-cans.php" method="post">

				                
											<div class="col_half">
				                                <label for="register-form-date">No. of Cans</label>
				                                <input type="number" min="1" id="register-form-cans" name="cans" value="" class="form-control" required/>
				                            </div>

											<div class="col_half">
				                                <label for="register-form-date">Mobile number</label>
				                                <input type="number"  id="phone" name="phone" value="" class="form-control" required/>
				                            </div>
											<div class="col_half">
				                                <label for="register-form-date">Date</label>
				                                <input type="date" id="register-form-date" name="deldate" value="" class="form-control" required/>
				                                *Delivery Date for your order
				                            </div>
				                             <div class="col_half">
				                                <label for="register-form-date">Time</label>
				                                <input type="text" id="register-form-text" name="deltime" value="" class="form-control" required/>
				                                *Delivery Time for your order
				                            </div>
				                             <div class="col_full">
				                                <label for="register-form-date">Address</label>
				                                <input type="text" id="register-form-text" name="address" value="" class="form-control" />
				                            </div>
				                            <br>
				                            <div class="col_half nobottommargin">
				                                <button class="button button-3d button-black nomargin" id="submit" name="submit" value="Submit" type="submit">Submit</button>
				                            </div>
			                        </form>   
                                	</div>
                                </div>
                            </div>

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
	<!-- <script>
			$('#register-form').on('submit',function(e){
     		e.preventDefault();

			firstname = document.getElementById("register-form-fusername").value
			lastname= document.getElementById("register-form-lusername").value;
			age = document.getElementById("register-form-url").value;
			qualification = document.getElementById("register-form-qua").value;
			contact = document.getElementById("register-form-phone").value;
			email = document.getElementById("register-form-email").value;
				$.ajax({
					type : "POST",
					url : "founder_details.php",	
					data:{
							firstname: firstname,
							lastname: lastname,
							age:  age,
							qualification : qualification,
							contact: contact,
							email: email
						},
						success: function(html){
						if(html=='true')
						{
							$(location).attr('href','http://localhost/CIE/form/HTML/misc.html');
						}
						else if(html=='false')
						{
							alert('dahskj');
						}
						else
						{
							alert('hvkfdkj');
						}
					}	 	
				});
				return false;
		});
	</script> -->

<!-- cdn for modernizr, if you haven't included it already -->
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script>
<!-- polyfiller file to detect and load polyfills -->
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/polyfiller.js"></script>
<script>
  webshims.setOptions('waitReady', false);
  webshims.setOptions('forms-ext', {types: 'date'});
  webshims.polyfill('forms forms-ext');
</script>
</body>
</html>