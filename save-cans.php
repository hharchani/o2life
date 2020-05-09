<?php
include 'connect.inc.php';
	if(isset($_POST["submit"]))
	{
		if(!empty($_POST["cans"])&&!empty($_POST["deldate"])&&!empty($_POST["deltime"])&&!empty($_POST["address"])&&!empty($_POST["phone"]) )
		{
		
				$cans = $_POST["cans"];
				$deldate = $_POST["deldate"];
				$deltime = $_POST["deltime"];
				$address = $_POST["address"];
				$username = $_SESSION["username"];
				$phone = $_POST["phone"];
				if(strlen($cans) > 0)
				{
					$query_cans = "INSERT INTO `bookings` VALUES ('','".$cans."','".$deldate."','".$deltime."','".$address."','".$username."','".$phone."')";
					if(mysql_query($query_cans))
						{
							require_once "sendmail.php";
							
							header("Refresh: 1; url=userpage.php");
							echo	"<h2>".'Order Placed'."</h2>";
							
						}	
					else
						exit(mysql_error());
				}
				
		}
	}
		else
		{
			header("Refresh: 1; url=book.php");
			echo "You cannot leave any field blank";
		}
	
?>