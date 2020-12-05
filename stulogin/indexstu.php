<?php
	session_start();
?>
<?php
  $link = $_GET["link"];
  if($link == "searchbtn")
  {
     
     header('location:http://localhost/ete/stulogin/dashstu/index.html');
  }
?>