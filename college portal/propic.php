<?php 
include 'connection.php';
session_start();
$kk=$_SESSION['id'];
$filename=$_FILES["uploadfile"]["name"];
 $tempname=$_FILES["uploadfile"]["tmp_name"];
$folder="images/".$filename;
 move_uploaded_file($tempname, $folder);

	$query="update adminregister set image='$folder' where id='$kk'"; 
$data=mysqli_query($con , $query);
if ($data) {
	header('location: viewprofile.php');
}
else
{
	echo 'sorry';
}






?>