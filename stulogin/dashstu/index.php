<html>
<head>
  <title>Student Main Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Including jQuery is required. -->
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
   <!-- Including our scripting file. -->
   
   <!-- Including CSS file. -->
  <link rel="stylesheet" href="styles1.css">
<link rel="stylesheet" href= 
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script type="text/javascript">
function submitform()
{
document.forms["myform"].submit();
alert("Value is sumitted");
}
</script>
</head>

<body>

<header class="fix">
<div class="nav-area">
	<div class="logo" id="home"><img src="ETE.png"></div>
	<ul class="menu-area">
	<li><a href="http://localhost/ete/stulogin/indexout.php?link=logout">Logout</a></li>
	</ul>
</div>
</header>
<form class="example" id="myform" style="margin:auto;max-width:500px">
  <input type="text" id="search" placeholder="Search.." name="search">
<button type="button"  onclick="location.href='http://localhost/ete/stulogin/dashstu/index.html'" >
         <i class="fa fa-search"></i></button>
<br/>
</form>

  <br>
  <br>
  
<h2>History</h2>





</form>
</body>
</html>
