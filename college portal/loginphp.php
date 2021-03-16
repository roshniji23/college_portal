<?php 
session_start();
include 'connection.php';

	 $email=$_POST['email'];
  $password=$_POST['password'];

  $query="select * from adminregister where email='$email' and password='$password' " ; 
$data=mysqli_query($con , $query);
	$result=mysqli_fetch_assoc($data);

$email=$result['email'];
$password=$result['password'];
$id=$result['id'];
$name=$result['name'];
$dob=$result['dob']; $mobile=$result['mobile']; $email=$result['email']; $address=$result['address']; $state=$result['state']; $city=$result['city'];
 $city=$result['city']; $pincode=$result['pincode']; $que=$result['que'];
$ans=$result['ans'];
 $img=$result['image'];
$_SESSION['name']="$name";
$_SESSION['id']="$id";
$_SESSION['dob']="$dob";
$_SESSION['mobile']="$mobile";
$_SESSION['email']="$email";
$_SESSION['address']="$address";
$_SESSION['state']="$state";
$_SESSION['city']="$city";
$_SESSION['pincode']="$pincode";
$_SESSION['que']="$que";
$_SESSION['ans']="$ans";
$_SESSION['image']="$img";
if ($email==$_POST['email'] && $password==$_POST['password'] ) 
{
	

header('location:adminprofile.php');
}
else
{
echo "sorry";

}


?>
