<?php
	require 'dbconfig/config.php';
?>
<?php
		if(isset($_POST['login']))
		{
			$phoneno=$_POST['phoneno'];
			$password=$_POST['password'];
			$encrypted_password = md5($password);
			
			$query="select * from studentlogin WHERE phoneno='$phoneno' AND password='$encrypted_password'";
			
			$query_run = mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0)
			{
				// valid
				header('location:dashstu/index.php');
			}
			else
			{
				// invalid
				echo '<script type="text/javascript"> alert("Invalid credentials") </script>';
			}
			
		}
		
		
		?>