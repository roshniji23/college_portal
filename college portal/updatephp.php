<?php 
include 'connection.php';

if (isset($_POST['submit']))
 {
 	
	$fullname=$_POST['fullname'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$pincode=$_POST['pincode'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$que=$_POST['que'];
	$ans=$_POST['ans'];

	$dob=$_POST['dob'];
  

	  $filename=$_FILES["uploadfile"]["name"];
 $tempname=$_FILES["uploadfile"]["tmp_name"];
$folder="images/".$filename;
 move_uploaded_file($tempname, $folder);
	$query="insert into adminregister set name='$fullname' , dob='$dob' , email='$email', address='$address' , pincode='$pincode' , city='$city' , state='$state' , que='$que' ,  ans='$ans'  ,image='$folder' ,  , mobile='$mobile' , image='$folder' " ; 
$data=mysqli_query($con , $query);
if ($data) {
	header('location:viewprofile.php');
}
else
{
	echo 'sorry';
}

}
 ?>