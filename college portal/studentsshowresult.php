<?php 
session_start();
include 'connection.php';
?>
<style type="text/css">
	
.table tr td{height: 50px; width: 200px; box-shadow: 5px 5px 5px gray; text-align: center;}
.hh img{height: 300px; width: 300px;}
.dd img{height: 200px; width: 200px;}
</style> 
<form action="" method="post" enctype="multipart/form-data">
<center>
<table class="table">
	<tr><td colspan="6"><h3>RESULT</h3></td></tr>
	<tr><td> Enter Roll No</td><td><input type="text" name="rollno"></td><td>Semester</td><td><select name="sem"><option>1st</option><option>2nd sem</option><option>3rd</option><option>4rth</option> <option>5th</option><option>6th</option></select><td></tr>
	<tr><td colspan="6"><input type="submit" name="submit" value="show"></td></tr>
	<tr><td colspan="6"><a href="adminprofile.php">Go To Profile..</a></td></tr>
</table>
</center></form>

<?php 

if (isset($_POST['submit']))
 {
	$rollno=$_POST['rollno'];
	$sem=$_POST['sem'];
	 
 $query="select * from uplodresult where rollno='$rollno' and  sem='$sem' ";
 $data=mysqli_query($con , $query);
 $result=mysqli_fetch_assoc($data);
 $resultimage=$result['resultimage'];
 $_SESSION['resultimage']="$resultimage";
 $rr=$_SESSION['resultimage'];

 if ($data) {
 ?>

 <div class="dd" download><?php echo "<img src='$rr' >"."<a href='$rr' download>download</a>";  } }


else
{
	echo "sorry";
}

  ?></div>