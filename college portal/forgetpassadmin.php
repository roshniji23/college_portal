<?php
session_start();
include 'connection.php';
?>

<html>
<head>
	<title></title>
	<style type="text/css">
		.table tr td {text-align: center ; height: 60px; width: 200px; box-shadow: 5px 5px 5px gray; text-decoration: none;}
	</style>
</head>
<body>
	<form action="" method="post">
<table class="table">
	<tr><td colspan="2"><h2><b>Forget Password</b></h2></td></tr>
	<tr><td><b>Email</b></td><td><input type="email" name="email"></td></tr>
    <tr><td><b>Security Question</b></td>
    	<td>
    	<select class="form-select" aria-label="Default select example" name="que">
  <option selected>What is Your pet name ?</option>
  <option value="1">What is Your Hobby ?</option>
  <option value="2">What makes you happy ?</option>
  <option value="3">What is your Favorite Color ?</option>
</select>
    	</td></tr>
  <tr><td><b>Answer</b></td><td><input type="text" name="ans"></td></tr>
  <tr><td><b>Create New Password</b></td><td><input type="Password" name="password"  id="myInput">
   <input type="checkbox" onclick="myFunction()">Show </td>
  </td></tr>
<tr><td colspan="2"><input type="submit" name="submit"></td></tr>
</table>
<script type="text/javascript">
	function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script></form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
	$email=$_POST['email'];
	$que=$_POST['que'];
	$ans=$_POST['ans'];
	$password=$_POST['password'];
	$query="UPDATE `adminregister` SET `password`='$password' WHERE email='$email' and que='$que' and ans='$ans' ";
	$data=mysqli_query($con , $query);
	if ($data) {
		
		header('location:adminlogin.php');

	}
	else
	{
		echo "Something is Wromg !!!!!!!";
	}
}

?>