<?php
	session_start();
	require 'dbconfig/config.php';
?>
<?php
		if(isset($_POST['login']))
		{
			$Name=$_POST['Name'];
			$phoneno=$_POST['phoneno'];
			$password=$_POST['password'];
			$encrypted_password = md5($password);
			
			$query="select * from teacherlogin WHERE Name='$Name' AND phoneno='$phoneno' AND password='$encrypted_password'";
			
			$query_run = mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0)
			{
				// valid
				$_SESSION['Name']= $Name;
				header('location:dashtea/index1.php');
			}
			else
			{
				// invalid
				echo '<script type="text/javascript"> alert("Invalid credentials") </script>';
			}
			
		}
		
		
		?>