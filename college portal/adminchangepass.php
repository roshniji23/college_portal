<?php 

include 'connection.php';
session_start();
$kk=$_SESSION['email'];
$query="SELECT * FROM `adminregister` WHERE email='$kk'";
$data=mysqli_query($con , $query);

$result=mysqli_fetch_assoc($data);
$pass=$result['password'];

 ?>
  <style type="text/css">
  	.table {text-align: center; height: 250px; width: 500px; background-color: lightblue;  }
  	.table tr td{box-shadow: 5px 5px 5px gray;}
  </style>
  <div>
  	<form action="" method="post">
  		<center>
  		<table class="table">
  			<tr><td colspan="2"><h3><b>Change Password</b></h3></td></tr>
  			<tr>
  				<td><b>Current Password</b></td><td><input type="Password" name="currentpass" id="myInput">   <input type="checkbox" onclick="myFunction()">Show </td>
  			</tr>
  			<tr>
  				<td><b>Create New Password</b></td><td><input type="Password" name="password" id="myInput">  <input type="checkbox" onclick="myFunction()">Show </td>
  			</tr>
  			<tr>
  				<td><b>Cunfirm New Password</b></td><td><input type="Password" name="cpassword" id="myInput">  <input type="checkbox" onclick="myFunction()">Show </td>
  			</tr>
  			<tr><td colspan="2"><input type="submit" name="submit" value="Change and Save"></td></tr>
  		</table></center>
  	</form>
<script type="text/javascript">
	function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
  </div>

  <?php 

if (isset($_POST['submit']))
 { 
$currentpass=$_POST['currentpass'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
     if ($currentpass==$pass && $cpassword==$password) 
     {
		
 $query="UPDATE `adminregister` SET password='$password' WHERE email='$kk'";
$data=mysqli_query($con , $query);
if ($data) {
	
	header('location:adminlogin.php');
}
else
{
	echo "<script>"."alert('Please Enter Currect Password')"."</script>";

	}}}

   ?>