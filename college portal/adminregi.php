
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<style type="text/css">
	.div1{height: 900px; width: 700px; background-color: lightblue; padding: 20px; border-radius: 20px;}
</style>
</head>
<body><center>
	<form action="" method="post" enctype="multipart/form-data">
	<h4><b>Admin Registration</b></h2><br>
<div class="div1">

	<div class="row">
  <div class="col">
<b>Name</b>
  </div>
  <div class="col">
    <input type="text" class="form-control"  aria-label="Last name" name="fullname">
  </div>
</div>
<br>

<div class="row">
  <div class="col">
<b>ID</b>
  </div>
  <div class="col">
    <input type="text" class="form-control"  aria-label="Last name" name="id">
  </div>
</div>
<br>
<div class="row">
  <div class="col">
<b>DOB</b>
  </div>
  <div class="col">
    <input type="date" class="form-control"  aria-label="Last name" name="dob">
  </div>
</div><br>

<div class="row">
  <div class="col">
<b>Mobile</b>
  </div>
  <div class="col">
    <input type="tel" class="form-control"  aria-label="Last name" name="mobile">
  </div>
</div><br>

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
<b>Address</b>
  </div>
  <div class="col">
  
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address"></textarea>
  </div>
</div><br>

<div class="row">
  <div class="col">
<b>State</b>
  </div>
  <div class="col">
  <select class="form-select" aria-label="Default select example" name="state">
  <option selected>Maharashtra</option>
  <option value="1">Madhya Pradesh</option>
  <option value="2">Uttar Pradesh</option>
  <option value="3">Chattisgadh</option>
  <option value="3">Bihar</option>
  <option value="3">TamilNaidu</option>
  <option value="3">Goa</option>
</select>
  
  </div>
</div><br>



<div class="row">
  <div class="col">
<b>City</b>
  </div>
  <div class="col">
  <select class="form-select" aria-label="Default select example" name="city">
  <option selected>Bhopal</option>
  <option value="1">Balaghat</option>
  <option value="2">Indor</option>
  <option value="3">Raipur</option>
  <option value="3">Jabalpur</option>
  <option value="3">Nagpur</option>
</select>
  
  </div>
</div><br>

<div class="row">
  <div class="col">
<b>Pincode</b>
  </div>
  <div class="col">
    <input type="text" class="form-control"  aria-label="Last name" name="pincode">
  </div>
</div><br>


<div class="row">
  <div class="col">
<b>Question</b>
  </div>
  <div class="col">
  <select class="form-select" aria-label="Default select example" name="que">
  <option selected>What is Your pet name ?</option>
  <option value="1">What is Your Hobby ?</option>
  <option value="2">What makes you happy ?</option>
  <option value="3">What is your Favorite Color ?</option>
</select>
  
  </div>
</div><br>

<div class="row">
  <div class="col">
<b>Answer</b>
  </div>
  <div class="col">
    <input type="text" class="form-control"  aria-label="Last name" name="ans">
  </div>
</div><br> 


<div class="row">
  <div class="col">
<b>Image</b>
  </div>
  <div class="col">
    <input type="file" class="form-control"  aria-label="Last name" name="uploadfile">
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
<input class="btn btn-primary" type="submit" value="Submit" name="submit">
</div></center><form>
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
</body>
</html>

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
	$password=$_POST['password'];
	$dob=$_POST['dob'];
  $id=$_POST['id'];

	  $filename=$_FILES["uploadfile"]["name"];
 $tempname=$_FILES["uploadfile"]["tmp_name"];
$folder="images/".$filename;
 move_uploaded_file($tempname, $folder);
	$query="insert into adminregister set name='$fullname' , dob='$dob' , email='$email', address='$address' , pincode='$pincode' , city='$city' , state='$state' , que='$que' ,  ans='$ans' , password='$password' ,image='$folder' , id='$id' , mobile='$mobile' " ; 
$data=mysqli_query($con , $query);
if ($data) {
	echo "hello";
}
else
{
	echo 'sorry';
}

}
 ?>