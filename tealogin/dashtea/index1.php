<?php
	session_start();
?>
<html>
<head>
  <title>Teacher Main Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles2.css">
<link rel="stylesheet" href= 
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

<header class="fix">
<div class="nav-area">
	<div class="logo" id="home"><img src="ETE.png"></div>
	<ul class="menu-area">
    <li><a href="post/upload.html">Post</a></li>
    <li><a href="http://localhost/ete/tealogin/indexout.php?link=logout">Logout</a></li>
	</ul>
</div>
</header>
<form class="example" action="/action_page.php" style="margin:auto;max-width:500px">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
<br/><br/><br/><center>
<h3 style="color:#692372">Welcome
	<?php echo $_SESSION['Name']?>
</h3>
</center>
</form>
<br/>


  <br>
  <br>
  
<h2>History</h2>

</body>
</html>