
<?php 
include 'connection.php';
session_start();
 ?>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<style type="text/css">
	.div1{height: 350px; width: 500px; padding: 20px;  background-color: lightgray; position: relative; left: 50%; border-radius: 20px; }
</style>
</head>
<body>
<form action="loginphp.php" method="post">
<div class="div1">
	<center><h3>Admin Login Here</h3><br><br></center>
	<div class="row">
  <div class="col">
<b>Email</b>
  </div>
  <div class="col">
    <input type="email" class="form-control"  aria-label="Last name" name="email">
  </div>
</div><br>
<div class="row">
  <div class="col">
<b>Create Password</b>
  </div>
  <div class="col">
    <input type="Password" class="form-control"  aria-label="Last name" id="myInput" name="password">
    <input type="checkbox" onclick="myFunction()">Show Password
  </div>
</div><br>
<center><input class="btn btn-primary" type="submit" value="Login" name="submit"><br>
</form>
  
<a href="adminregi.php">Register Here</a><br>
<a href="forgetpassadmin.php">Forget Password</a>
<a href="frontpage.php">go to firstpage..</a>
</center><br>


</div></center>
<script type="text/javascript">
	function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script><br>


</div>
</body>
</html>

