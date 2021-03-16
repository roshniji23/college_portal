
<?php 

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
			<tr><td><b>Roll No</b></td><td><input type="text" name="rollno"></td><td><b>Photo</b></td><td><input type="file" name="uploadfile"></td></tr>
			<tr><td><b>Gender</b></td><td><select name="gender"><option>--select--</option><option>Female</option><option>Male</option>
				<option>Bisexsual</option></select>
			</td> <td><b>Mobile</b></td><td><input type="text" name="smobile"></td></tr>
			<tr><td><b>Email</b></td><td><input type="email" name="email"></td><td><b>Address</b></td><td><textarea name="address"></textarea></td></tr>
           <tr><td><b>Stream</b></td><td><select name="stream">
            <option>Information Technology</option><option>Computer Science</option>
				<option>Mechanical Engineering</option><option>Electrical Engineering</option>
           </select></td>
				<td><b>State</b></td><td><select name="state"><option>--select--</option><option>Madhya Pradesh</option><option>Maharashtra</option>
				<option>Chattishgadh</option></select></td></tr>
				<tr>
						<td><b>City</b></td><td><select name="city"><option>--select--</option><option>Balaghat</option><option>Maharashtra</option>
				<option>Chattishgadh</option></select></td>

				
			<td><b>Pincode</b></td><td><input type="txt" name="pincode"></td></tr>
			<tr class="heading"><td colspan="4"><b><h3>Parent Details</h3></b></td>
			
			<tr>	<td><b>Father Name</b></td><td><input type="text" name="fathername"></td><td><b>Mother Name</b></td><td><input type="mothername" name="mothername"></td>
			</tr>
			<tr><td><b>Mobile</b></td><td><input type="text" name="pmobile"></td><td><b>Email</b></td><td><input type="email" name="email"></td></tr>
			<tr class="heading"><td colspan="4"><b><h3>Addmission Details</h3></b></td>
			<tr>	<td><b>Combination</b></td>
				<td><b><select name="course"><option>--select--</option><option>BCA</option><option>BE</option><option>MCA</option></select></b></td>
			<td><b>Year</b></td>
				<td><b><select name="year"><option>--select--</option><option>1st Year</option><option>2nd Year</option><option>3rd Year</option><option>4rth Year</option></select></b></td></tr>
				<td><b>Sem</b></td>
				<td><b><select name="sem"><option>--select--</option><option>1st sem</option><option>2nd sem</option><option>3rd sem</option><option>4rth sem</option><option>5th sem</option><option>6th sem</option><option>7nd sem</option></select></b></td>
				<td><b>Total Fee</b></td><td><input type="text" name="totalfee"></td></tr>
					<td><b>Paid Fee</b></td><td><input type="text" name="paidfee"></td>
					<td><b>Type</b></td><td><input type="text" name="type" value="student"></td><tr>
					<tr><td><b>password</b></td><td><input type="password" name="password" value=""></td></tr>
					

                     
						<tr class="heading"><td colspan="4"><b><h3><input type="submit" name="submit"></h3></b></td></tr>
		</table>
	</form>
</center>
</body>
</html>

<?php

if (isset($_POST['submit']))
 {
 	$rollno=$_POST['rollno'];
	$fullname=$_POST['fullname'];
	$smobile=$_POST['smobile'];
	$pmobile=$_POST['pmobile'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$pincode=$_POST['pincode'];
	$city=$_POST['city'];
	$state=$_POST['state'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $stream=$_POST['stream'];
    $fathername=$_POST['fathername'];
    $mothername=$_POST['mothername'];
    $sem=$_POST['sem'];
    $year=$_POST['year'];
    $course=$_POST['course'];
    $totalfee=$_POST['totalfee'];
    $paidfee=$_POST['paidfee'];
    $type=$_POST['type'];
    $password=$_POST['password'];
       ////////////////////////////////
     $filename=$_FILES["uploadfile"]["name"];

 $tempname=$_FILES["uploadfile"]["tmp_name"];
$folder="images/".$filename;
 move_uploaded_file($tempname, $folder);
////////////////////////////////////////////
  
 ////////////////////////////////////////////////
    $query="insert into studentregister set fullname='$fullname' , dob='$dob' , email='$email', address='$address' , pincode='$pincode' , city='$city' , state='$state'  , pmobile='$pmobile' , smobile='$smobile' , fathername='$fathername' , mothername='$mothername' ,  image='$folder' , sem='$sem' , year='$year' , course='$course'  , totalfee='$totalfee' , paidfee='$paidfee' , gender='$gender' , rollno='$rollno' , stream='$stream'  , type='$type' , password='$password'"; 
$data=mysqli_query($con , $query);
if ($data) {
	header('location:adminprofile.php');
}
else
{
	echo 'sorry';
}

}
 ?>