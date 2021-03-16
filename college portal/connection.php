<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db =  "collegeportal";
$con = mysqli_connect($host , $user , $pass , $db);
if(mysqli_connect_errno())
{
	echo "connection error";
	exit;
}


?>