<?php 
session_start();
include 'connection.php';
?>
<style type="text/css">
	
.table tr td{height: 50px; width: 200px; box-shadow: 5px 5px 5px gray; text-align: center;}
.hh img{height: 300px; width: 300px;}
</style> 
<form action="" method="post" enctype="multipart/form-data">
<center>
<table class="table">
	<tr><td colspan="6"><h3>RESULT</h3></td></tr>
	<tr><td>Roll No</td><td><input type="text" name="rollno"></td><td>Semester</td><td><select name="sem"><option>1st</option><option>2nd</option><option>3rd</option><option>4rth</option> <option>5th</option><option>6th</option></select><td>Result</td><td><input type="file" name="uploadfile"></td></td></tr>
	<tr><td colspan="6"><input type="submit" name="submit" value="UPLOAD"></td></tr>
	<tr><td colspan="6"><a href="adminprofile.php">Go To Admin Profile..........</a></td></tr>
</table>
</center></form>

<?php 

if (isset($_POST['submit']))
 {
	$rollno=$_POST['rollno'];
	$sem=$_POST['sem'];
	  $filename=$_FILES["uploadfile"]["name"];

 $tempname=$_FILES["uploadfile"]["tmp_name"];
$folder="images/".$filename;
 move_uploaded_file($tempname, $folder);
 $query="insert into uplodresult set rollno='$rollno' , sem='$sem' , resultimage='$folder' ";
 $data=mysqli_query($con , $query);
 if ($data) {

header('location:studentresult.php');
 }
else
{
	echo "sorry";
}
}




 ?>