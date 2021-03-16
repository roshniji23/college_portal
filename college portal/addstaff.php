
<?php 
session_start();
include 'connection.php';
 ?>

<html>
<head>
	<title></title>
	<style type="text/css">
		.table tr td{text-align: center ; height: 40px; width: 250px; box-shadow: 5px 5px 5px gray;}
		.heading{background-color: lightgray;}
	</style>
</head>
<body>
<center>
	<form action=""  method="post" enctype="multipart/form-data">
		<table class="table">
			<tr class="heading"><td colspan="4"><b><h3>Personal Details</h3></b></td></tr>
			<tr><td><b>Fullname</b></td><td><input type="text" name="fullname"></td><td><b>DOB</b></td><td><input type="date" name="dob"></td></tr>
			<tr><td><b>id</b></td><td><input type="text" name="id"></td><td><b>Photo</b></td><td><input type="file" name="uploadfile"></td></tr>
			<tr><td><b>Gender</b></td><td><select name="gender"><option>--select--</option><option>Female</option><option>Male</option>
				<option>Bisexsual</option></select>
			</td> <td><b>Mobile</b></td><td><input type="text" name="smobile"></td></tr>
			<tr><td><b>Email</b></td><td><input type="email" name="email"></td><td><b>Address</b></td><td><textarea name="address"></textarea></td></tr>
           <tr><td><b>Department</b></td><td><select name="department">
            <option>Information Technology</option><option>Computer Science</option>
				<option>Mechanical Engineering</option><option>Electrical Engineering</option>
           </select></td>
				<td><b>State</b></td><td><select name="state"><option>--select--</option><option>Madhya Pradesh</option><option>Maharashtra</option>
				<option>Chattishgadh</option></select></td></tr>
				<tr>
						<td><b>City</b></td><td><select name="city"><option>--select--</option><option>Balaghat</option><option>Maharashtra</option>
				<option>Chattishgadh</option></select></td>

				
			<td><b>Pincode</b></td><td><input type="txt" name="pincode"></td></tr>
				<td><b>type</b></td><td><input type="text" name="type" value="staff"></td></tr>
			
						<tr class="heading"><td colspan="4"><b><h3><input type="submit" name="submit"></h3></b></td></tr>
		</table>
	</form>
</center>
</body>
</html>

<?php

if (isset($_POST['submit']))
 {
 	$id=$_POST['id'];
	$fullname=$_POST['fullname'];
	$smobile=$_POST['smobile'];
	
	$email=$_POST['email'];
	$address=$_POST['address'];
	$pincode=$_POST['pincode'];
	$city=$_POST['city'];
	$state=$_POST['state'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $department=$_POST['department'];
    
    $type=$_POST['type'];
     $filename=$_FILES["uploadfile"]["name"];

 $tempname=$_FILES["uploadfile"]["tmp_name"];
$folder="images/".$filename;
 move_uploaded_file($tempname, $folder);
    $query="insert into studentregister set fullname='$fullname' , dob='$dob' , email='$email', address='$address' , pincode='$pincode' , city='$city' , state='$state' , smobile='$smobile' , image='$folder' , gender='$gender' , rollno='$id' , stream='$department' , type='$type' "; 
$data=mysqli_query($con , $query);
if ($data) 
{
	header('location:adminprofile.php');
}
else
{
	echo 'sorry';
}

}
 ?>