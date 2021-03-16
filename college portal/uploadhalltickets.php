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
 <table class="table2"><tr><td colspan="3"><h2>Upload Admit Card</h2></td></tr>
 <tr><td><b>Roll Number</b></td><td><input type="text" name="rollno"></td></tr>

   <tr><td>Upload Admit Card</td><td><input type="file" name="uploadfile"></td></tr>
   <td><td><input type="submit" name="submit" value="Upload"></td></td>
  
 </table></form>
 </body>
 </html>
 <?php 
if (isset($_POST['submit'])) 
{
	$rollno=$_POST['rollno'];
	
 $filename=$_FILES["uploadfile"]["name"];
 $tempname=$_FILES["uploadfile"]["tmp_name"];
$folder="images/".$filename;
 move_uploaded_file($tempname, $folder);
 $query="insert into admitji set rollno='$rollno' ,  admitcard='$folder' " ;
 $data=mysqli_query($con , $query);
if ($data) {
	
	header('location:adminprofile.php');

}
else
{
	echo "sorry";
}

}

  ?>