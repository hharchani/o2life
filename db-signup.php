<?php
include 'connectdb.php';
		if(!empty($_POST["register-form-name"])&&!empty($_POST["register-form-email"])&&!empty($_POST["register-form-username"])&&!empty($_POST["register-form-phone"])&&!empty($_POST["register-form-password"])&&!empty($_POST["register-form-repassword"]) )
		{	

			$name = $_POST["register-form-name"];
			$email = $_POST["register-form-email"];
			$username = $_POST["register-form-username"];
			$phone = $_POST["register-form-phone"];
			$password = md5($_POST["register-form-password"]);
			$repassword = md5($_POST["register-form-repassword"]);
		
			$con= $conn;//mysqli_connect("mysql12.000webhost.com","a8062100_badri","badri123456","a8062100_o2life");
			$check="SELECT * FROM register WHERE username = '$username'";
			
			$rs = mysqli_query($con,$check);
			
			$data = mysqli_fetch_array($rs, MYSQLI_NUM);
			
			if($data[0] > 1) {
				header("Refresh:0; url=sign.php");
			    echo "<script>
			alert('Username already exists')
			</script>";
			}
			else
			{
			    $newUser="INSERT INTO register(id,name,email,username,phone,password) VALUES('','$name','$email','$username','$phone','$password')";
			    if (mysqli_query($con,$newUser))
			    {	
			    		$_SESSION["username"] = $username;
						header("Refresh:2; url=book.php");
			        	echo "<h2>".'You are now registered'."</h2>";
			    }
			    else
			    {	
			    	header("Refresh:0; url=sign.php");
			 		echo "<script>
					alert('Mobile number already exists')
				</script>";   	
			       
			    }
			}
		}	



		
?>
