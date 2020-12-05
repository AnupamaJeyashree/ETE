<?php
$user = "root"; 
$password = "YW5skZa3uv9On5fz"; 
$host = "localhost"; 
$dbase = "ete"; 
$table = "mycourse"; 
 
// Connection to DBase 
mysqli_connect($host,$user,$password); 
@mysqli_select_db($dbase) or die("Unable to select database");

$result= mysql_query( "SELECT  video, fileextension FROM mycourses ORDER BY ID DESC LIMIT 5" ) 
or die("SELECT Error: ".mysql_error()); 

print "<table border=1>\n"; 
while ($row = mysql_fetch_array($result)){ 
$videos_field= $row['video'];
$video_show= "Uploads/";
$NameOfCourse= $row['NameOfCourse'];
$fileextension= $row['fileextension'];
print "<tr>\n"; 
print "\t<td>\n"; 
echo "<font face=arial size=4/>$NameOfCourse</font>";
print "</td>\n";
print "\t<td>\n"; 
echo "<div align=center><video width='320' controls><source src='$video_show' type='video/$fileextension'>Your browser does
not support the video tag.</video></div>";
print "</td>\n";
print "</tr>\n"; 
} 
print "</table>\n";  

?> 
