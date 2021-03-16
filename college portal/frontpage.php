<?php 
session_start();
include 'connection.php';
 ?>
<html>
<head>
	<title></title>
	<style type="text/css">
  .div1{height: 100vh; width: 98%; background-color: lightgray; padding: 10px; }	
  .div2{height: 10vh; width: 98%; background-color: gray; box-shadow: 10px 10px 10px  gray; border-radius: 20px; font-family: verdana; word-spacing: 10px; padding-top: 1%; padding-bottom: 1%; color: lightgray; }
  .div3{height: 50vh; width: 70%;  box-shadow: 10px 10px 10px  gray; background-image: url("images/jabalpur-engineering-college-jec-jabalpur.jpg");     border-radius: 10px; position: relative; left: 2%; object-fit:cover;}
 .div4{height: 50vh; width: 25%;  box-shadow: 10px 10px 10px  gray;  border-radius: 10px; background-color: lightgray; position:absolute; top: 21%; left: 72%;}
 .table tr td{ height: 7vh; width: 100px; }
</style>
 </head>
<body>
<div class="div1">
<header>
	<center><div class="div2"><h2 >JABALPUR   ENGINEERING  COLLEGE</h2>
     <a href="adminlogin.php">Admin</a>
	</div></center></header><br>
    <div class="div3"></div>
	<div class="div4">
		<form  action="" method="post">
			<center>
			<table class="table">
				<tr><td colspan="2"><center><h3><b>Log in</b></h3></center></td></tr>
				<tr><td>UserName</td><td><input type="text" name="username" required=""></td></tr>
				<tr><td>Password</td><td><input type="password" name="password" required=""></td></tr>
				<tr><td>Type</td><td>
					<select name="type">
						<option>staff</option>
						<option>student</option>
					</select>
				</td></tr>
				<tr><td colspan="2"><center><h3><b><input type="submit" name="submit" value="Login"></b></h3></center></td></tr>
				
                <tr><td><a href="forgetpass.php">Forget..Password</a></td></tr>
			</table>
		</center>
		</form>
	</div>

</div>
</body>
</html>


<?php 

if (isset($_POST['submit']))
 {
	$username=$_POST['username'];
	$password=$_POST['password'];
	$type=$_POST['type'];
	$query="select * from studentregister where rollno='$username' and password='$password' and type='$type'  " ; 
	$data=mysqli_query($con , $query);
	$result=mysqli_fetch_assoc($data);
	$image=$result['image'];
		$fullname=$result['fullname'];
		$address=$result['address'];
	$smobile=$result['smobile'];
	$address=$result['address'];
		$dob=$result['dob'];
		$email=$result['email'];
		$rollno=$result['rollno'];
	$typee=$result['type'];
	$sem=$result['sem'];
	$sresult=$result['sresult'];
$fathername=$result['fathername'];
  $paidfee=$result['paidfee'];
$totalfee=$result['totalfee'];


	 $_SESSION['image']="$image";
	$_SESSION['type']="$typee";
		 $_SESSION['fullname']="$fullname";
	 $_SESSION['address']="$address";
 $_SESSION['smobile']="$smobile";
 $_SESSION['dob']="$dob";
$_SESSION['rollno']="$rollno";
$_SESSION['sem']="$sem";
$_SESSION['fathername']="$fathername";
$_SESSION['email']="$email";
$_SESSION['sem']="$sem";
$_SESSION['paidfee']="$paidfee";
$_SESSION['totalfee']="$totalfee";
$_SESSION['sresult']="$sresult";
    
   
	
	if ($data) {

		
		if ($typee=='student')
		 {
			header('location:studentprofile.php');

		}
      elseif ($typee=='staff')
       {
      	header('location:staff.php');
      }
      else
      {
echo "sorry";
      }

}

}

 ?>