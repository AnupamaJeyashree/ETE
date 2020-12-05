<?php
	require 'dbconfig/config.php';
?>
<?php
	if(isset($_POST['signup']))
	{
	  	echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>';
		
                                    $Name = $_POST['Name'];
				
		$phoneno = $_POST['phoneno'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
				
		if($password==$cpassword)
		{
		 	$encrypted_password = md5($password);
					
			$query= "select * from expertlogin WHERE phoneno='$phoneno' ";
			$query_run = mysqli_query($con,$query);
					
			if(mysqli_num_rows($query_run)>0)
			{
				// there is already a user with the same username
				echo '<script type="text/javascript"> alert("User or Email id already exists.. try another username or email id") </script>';
			}
			else
			{
				$query= "insert into expertlogin values('','$Name','$phoneno','$encrypted_password')";
				$query_run = mysqli_query($con,$query);
						
					if($query_run)
					{
						echo '<script type="text/javascript"> alert("User Registered.. Go to login page to login") </script>';
						header('location:index.html');
					}
					else
					{
						echo '<script type="text/javascript"> alert("Error!") </script>';
					}
			}
					
					
		}
		else{
			echo '<script type="text/javascript"> alert("Password and confirm password does not match!") </script>';	
		}
				
				
				
				
	}
?>