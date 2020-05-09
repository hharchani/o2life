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

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="" />

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
	<title>User Order Page</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

	<body class="stretched">
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
							<li><a href="book.php"><div>Book a can</div></a></li>
							<li><a href="logout.php"><div>Logout</div></a></li>
						</ul>			
					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->



	



		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Orders</h1>		

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">
		
				<br>
					<?php

$servername = "mysql12.000webhost.com";
$username = "a8062100_badri";
$password = "badri123456";
$dbname = "a8062100_o2life";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 $username = $_SESSION["username"];
$sql="SELECT * FROM bookings WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	  echo "<table class=\"table table-hover\" ><tr align=\"center\"><th style=\"text-align:center\"><h4>No. of Cans</h4></th><th style=\"text-align:center\"><h4>Date</h4></th><th style=\"text-align:center\"><h4>time</h4></th></th><th style=\"text-align:center\"><h4>Address</h4></th></tr>";
    // output data of each row
   
    while($row = $result->fetch_assoc()) {
        echo "<tr><td align=\"center\"><h5>".$row["cans"]." </h5></td>
        <td align=\"center\"><h5>".$row["date"]." </h5></td>
        <td align=\"center\"><h5>".$row["time"]." </h5></td>
        <td align=\"center\"><h5>".$row["address"]." </h5></td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "No Cans Booked.";
}
$conn->close();
?>
					

				</div>

			</div>

		</section><!-- #content end -->

	
	</div><!-- #wrapper end -->

	<!-- Go To Top
	======================================	======= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="functions.js"></script>

</body>
</html>