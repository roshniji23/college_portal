<?php 
session_start();
include 'connection.php';
 ?>
<html>
<head>
	<title></title>
	<style type="text/css">
		.table tr td{text-align: center ; height: 60px; width: 150px; box-shadow: 5px 5px 5px gray;}
		.heading{background-color: lightgray;}
        
        .img img{height: 100px; width: 100px;}
	</style>
</head>
<body><center>
<form action=" " method="post" enctype="multipart/form-data"><table class="table">
	<tr><td colspan="6"><b><h2>Search Student</h2></b></td></tr>
	<tr><td><b>Roll no</b></td><td><input type="text" name="rollno" placeholder="Enter Register No" ></td>
		<td><b>Enter Name</b></td><td><input type="text" name="sname" placeholder="Enter Name"></td>
		<td><b>Select Class</b></td><td>
			<select name="stream"><option>--Select DepartMent</option><option>Information Technology</option><option>Computer Science</option>
				<option>Mechanical Engineering</option><option>Electrical Engineering</option></select>
		</td></tr>
		<tr><td colspan="3"><input type="submit" name="submit" value="Search"></td><td colspan="3"></td></tr>
</table></form></center>
</body>
</html>

<?php


if (isset($_POST['submit']))
 {
	$rollno=$_POST['rollno'];
	$sname=$_POST['sname'];
	$stream=$_POST['stream'];
	 $query="select * from studentregister where rollno='$rollno' and fullname='$sname' and stream='$stream'"; 
$data=mysqli_query($con , $query);
$result=mysqli_fetch_assoc($data);
$fullname=$result['fullname'];
$rollno=$result['rollno'];
$dob=$result['dob'];
$smobile=$result['smobile'];
$stream=$result['stream'];
$course=$result['course'];
$year=$result['year'];
$sem=$result['sem'];

$image=$result['image'];
$paidfee=$result['paidfee'];
$address=$result['address'];
$_SESSION['sname']="$fullname";
$_SESSION['srollno']="$rollno";

$_SESSION['ssmobile']="$smobile";
$_SESSION['sstream']="$stream";
$_SESSION['scourse']="$course";
$_SESSION['syear']="$year";
$_SESSION['ssem']="$sem";
$_SESSION['saddress']="$address";
$_SESSION['spaidfee']="$paidfee";

if ($data)
 {

 ?>

 <div>
	<table class="table">
		<tr class="heading"><td>Register No</td>
       
        <td>Name</td>
        <td>DOB</td>
        <td>Mobile No</td>
        <td>Course</td>
        <td>Stream</td>
        <td>Year</td>
        <td>Semester</td>
        <td>Photo</td>
         <td>Edit</td>
      <td>Delete</td> 
		</tr>
<tr>
	<td><?php echo "$rollno";?></td>
	<td><?php echo "$fullname";?></td>
	<td><?php echo "$dob";?></td>
	<td><?php echo "$smobile";?></td>
	<td><?php echo "$course";?></td>
	<td><?php echo "$stream";?></td>
	<td><?php echo "$year";?></td>
	<td><?php echo "$sem";?></td>
	<td><div class="img"><?php echo "<img src='$image'>"; ?></div></td>
     <td><a href="edit.php">Edit</a></td>
      <td><a href="delete.php">Delete<<?php }} ?></a></td> 	
 </td>
</tr>
	</table>
</div>

<center>
	
	<table><tr>
		


	</tr></table>
</center>