<?php 
session_start();
include 'connection.php';


 ?>
 <html>
 <head>
 	<title></title>
 	<style type="text/css"> 
.table2 tr td{height: 50px; width: 200px; box-shadow: 5px 5px 5px gray; text-align: center;}
</style>
 </head>
 <body>
 	<form action="" method="post" enctype="multipart/form-data">
 <table class="table2"><tr><td colspan="3"><h2>Upload Notes</h2></td></tr>
 <tr><td><b>Subject Name</b></td><td><input type="text" name="subname"></td></tr>
  <tr><td><b>Branch</b></td><td><select name="branch"><option>information technology</option><option>computer science and engineering </option><option>electrical engineering</option><option>mechanical engineering</option><option>electronic engineering </option></select></td></tr>
   <tr><td><b>Semester</b></td><td><select name="sem"><option>1st</option><option>2nd </option><option>3rd</option><option>4rth</option><option>5th</option><option>6th</option></select></td></tr>
   <tr><td>Upload Notes</td><td><input type="file" name="uploadfile"></td></tr>
   <td><td><input type="submit" name="submit" value="Upload"></td></td>
  
 </table></form>
 </body>
 </html>
 <?php 
if (isset($_POST['submit'])) 
{
	$sname=$_POST['subname'];
	$branch=$_POST['branch'];
	$sem=$_POST['sem'];
 $filename=$_FILES["uploadfile"]["name"];
 $tempname=$_FILES["uploadfile"]["tmp_name"];
$folder="images/".$filename;
 move_uploaded_file($tempname, $folder);
 $query="insert into notes set subject='$sname' , branch='$branch' , notes='$folder' , sem='$sem'" ;
 $data=mysqli_query($con , $query);
if ($data) {
	
	header('location:studentprofile.php');

}
else
{
	echo "sorry";
}

}

  ?>