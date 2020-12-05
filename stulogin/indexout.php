<?php
	session_start();
?>
<?php
  $link = $_GET["link"];
  if($link == "logout")
  {
     session_destroy();
     header('location:http://localhost/ete/who%20are%20u%20login/index.html');
  }
?>