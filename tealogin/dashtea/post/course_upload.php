<?php 
$user = "root"; 
$password = "YW5skZa3uv9On5fz"; 
$host = "localhost"; 
$dbase = "ete"; 
$table = "course"; 

$connection= mysqli_connect ($host, $user, $password);
if (!$connection)
{
die ('Could not connect:' . mysql_error());
}
mysqli_select_db($connection,$dbase);


$name= $_FILES['filename']['name'];

$tmp_name= $_FILES['filename']['tmp_name'];

$submitbutton= $_POST['submit'];

$position= strpos($name, "."); 

$fileextension= substr($name, $position + 1);

$fileextension= strtolower($fileextension);

$NameOfCourse= $_POST['name_of_course'];
$classes=$_POST['suitable_for_classes'];
$NameOfExp=$_POST['instructor_name'];

$success= -1;

$descript= 0;

if (empty($NameOfCourse))
{
$descript= 1;
}

if (isset($name)) {

$path= 'Uploads/';

if (!empty($name)){
if (($fileextension !== "mp4") && ($fileextension !== "ogg") && ($fileextension !== "webm"))
{
$success=0;
echo '<script type="text/javascript"> alert("The file extension must be .mp4, .ogg, or .webm in order to be uploaded")</script>';
}


else if (($fileextension == "mp4") || ($fileextension == "ogg") || ($fileextension == "webm"))
{
$success=1;
if (move_uploaded_file($tmp_name, $path.$name)) {
echo '<script type="text/javascript"> alert("Uploaded") </script>';
}
}
}
}if((!empty($NameOfCourse)) && ($success == 1)){
$query="INSERT INTO $table (id,NameOfexp,NameOfCourse,classes, filename, fileextension)
VALUES ('','$NameOfExp','$NameOfCourse','$classes', '$name', '$fileextension')";
mysqli_query($connection,$query);
header('location:http://localhost/ete/tealogin/dashtea/post/upload.html');
}

mysqli_close($connection);
?>