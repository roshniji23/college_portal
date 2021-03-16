<?php 

include 'connection.php';
session_start();

 ?>
 <html>
 <head>
 	<title></title>
 	<style type="text/css">
 		
 		.attribute{color: purple;}
 			.table2 tr td{height: 50px; width: 250px; box-shadow: 4px 4px 4px  gray; border-radius: 10px; text-align: center; padding: 5px;}
 	.divimg img{height: 200px; width: 200px;}
 	.heading{background-color: lightgray;}
 	</style>
 </head>
 <body>
 	
 		 	
 		 	
           
 	<center>
 	<form action="propic.php" method="post" enctype="multipart/form-data">
 	<table class="table2">
 	
<tr class="heading"><td colspan="2"><h3><b>Update Your Profile</b></h3></td></tr>
<tr><td colspan="2"> <div class="divimg" >  <?php $kk=$_SESSION['image']; echo "<img src='$kk'>"; ?></div></td></tr>
        <tr><td colspan="2">
        	 <div class="divji1"><input type="file" name="uploadfile" value="<?php $_SESSION['image']; ?>"></div>
        </td></tr>
        <tr><td><input type="submit" name="submit" value="submit"></td></tr>
</form>
<form action="" method="post" enctype="multipart/form-data">
 		<tr><td>Name</td><td><input type="text" class="form-control" name="fullname" value= "<?php $kk=$_SESSION['name']; echo "$kk"; ?>"></td></tr>

 		<tr><td>DOB</td><td> <input type="date" class="form-control"  aria-label="Last name" name="dob" value="<?php $kk=$_SESSION['dob']; echo "$kk"; ?>"></td></tr>
<tr><td>Mobile</td><td>    <input type="tel" class="form-control"  aria-label="Last name" name="mobile" value="<?php $kk=$_SESSION['mobile']; echo "$kk"; ?>"></td></tr>

<tr><td>Email</td><td>  <input type="email" class="form-control"  aria-label="Last name" name="email" value="<?php $kk=$_SESSION['email']; echo "$kk"; ?>"></td></tr>

<tr><td>Address</td><td><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address" value="<?php $kk=$_SESSION['address']; echo "$kk"; ?>" ></textarea>
</td></tr>
<tr><td>State</td><td> <select class="form-select" aria-label="Default select example" name="state" value="<?php $kk=$_SESSION['state']; echo "$kk"; ?>">
  <option selected>Maharashtra</option>
  <option value="1">Madhya Pradesh</option>
  <option value="2">Uttar Pradesh</option>
  <option value="3">Chattisgadh</option>
  <option value="3">Bihar</option>
  <option value="3">TamilNaidu</option>
  <option value="3">Goa</option>
</select></td></tr>

<tr><td>City</td><td>  <select class="form-select" aria-label="Default select example" name="city" value="<?php $kk=$_SESSION['city']; echo "$kk"; ?>">
  <option selected>Bhopal</option>
  <option value="1">Balaghat</option>
  <option value="2">Indor</option>
  <option value="3">Raipur</option>
  <option value="3">Jabalpur</option>
  <option value="3">Nagpur</option>
</select></td></tr>

<tr><td>Pincode</td><td> <input type="text" class="form-control"  aria-label="Last name" name="pincode" value="<?php $kk=$_SESSION['pincode']; echo "$kk"; ?>"></td></tr>

<tr><td>Question</td><td>  <select class="form-select" aria-label="Default select example" name="que" value="<?php $kk=$_SESSION['que']; echo "$kk"; ?>">
  <option selected>What is Your pet name ?</option>
  <option value="1">What is Your Hobby ?</option>
  <option value="2">What makes you happy ?</option>
  <option value="3">What is your Favorite Color ?</option>
</select></td></tr>
<tr><td>Answer</td><td>  <input type="text" class="form-control"  aria-label="Last name" name="ans" value="<?php $kk=$_SESSION['ans']; echo "$kk"; ?>"></td></tr>
<tr class="heading"><td colspan="2"><input class="btn btn-primary" type="submit" value="Update and Save" name="submit"></td></tr>

 	</table>
</form>
</center><form>

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
<a href="adminprofile.php">adminprofile</a>
 </div>
 </body>
 </html>
 
 <?php 
include 'connection.php';

if (isset($_POST['submit']))
 {
 	$kk=$_SESSION['id'];
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


	$query="update adminregister set name='$fullname' , dob='$dob' , mobile='$mobile' , address='$address' , pincode='$pincode' , que='$que' , ans='$ans'  , state='$state' , city='$city' where id='$kk'"; 
$data=mysqli_query($con , $query);
if ($data) {
	header('location: viewprofile.php');
}
else
{
	echo 'sorry';
}

}
 ?>