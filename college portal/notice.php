<?php 
session_start();
include 'connection.php';
 ?>
<html>
<head>
	<title></title>
	<style type="text/css">
		.table tr td{text-align: center ; height: 30px; width: 600px; box-shadow: 5px 5px 5px gray;}
	</style>
</head>
<body>
<form action="" method="post"><center>
	<table class="table">
		<tr><td colspan="2"><h3><b>Add New Notice To Student</b></h3></td></tr>
		<tr><td><b>Notice Id </b></td><td><lable name="noticeid"><?php $kl=$_SESSION['id']; echo "$kl"; ?></label></td></tr>
		<tr><td><b>Notice Date </b></td><td><label name="noticedate"><?php  $kk=date("Y-m-d"); echo "$kk"; ?></label></td></tr>
		<tr><td><b>Title</b></td><td><input type="text" name="title"></td></tr> 
		<tr><td><b>Subject</b></td><td><input type="text" name="subject"></td></tr>
		<tr><td><b>Description</b></td><td><textarea name="description"></textarea></td></tr>
		<tr><td colspan="2"><input type="submit" name="submit"></td></tr>
			<tr><td colspan="2"><a href="adminprofile.php">Admin Profile</a></td></tr>
	</table></center>
</form>
</body>
</html>
<?php 

$kk=date("Y-m-d");
if (isset($_POST['submit']))
 {
	$noticeid=$_SESSION['id'];
	$noticedate=$kk;
	$title=$_POST['title'];
	$subject=$_POST['subject'];
	$description=$_POST['description'];
	 $query="insert into notice set noticeid='$noticeid' , noticedate='$noticedate' , title='$title', subject='$subject' , description='$description' "; 
$data=mysqli_query($con , $query);
if ($data)
 {
	header('location: adminprofile.php');
}
else
{
	echo "sorry";
}

}

 ?>

 <?php 

include 'connection.php';

$query="select * from notice ";
$data=mysqli_query($con , $query);


 ?>

 <html>
 <head>
 	<title></title>
 	<style type="text/css">
 		.table tr td{ text-align: center; height: 50px; width: 200px; box-shadow: 3px 3px 3px gray; }
 	</style>
 </head>
 <body>
 <center>


 	<table class="table">
 		<tr><td colspan="4"><h2><b>Notice</b></h2></td></tr>
 		<tr><td><h4><b>Date</b></h4></td>
        <td><h4><b>Title</b></h4></td>
        <td><h4><b>Subject</b></h4></td>
        <td><h4><b>Description</b></h4></td></tr>

        <?php 
        while ($result=mysqli_fetch_assoc($data)) {
	$noticedate=$result['noticedate'];
$noticeid=$result['noticeid'];
$title=$result['title'];
$subject=$result['subject'];	
$description=$result['description'];


         ?>
        <tr><td><?php echo "$noticedate"; ?></td>
         <td><?php echo "$title"; ?></td>
          <td><?php echo "$subject"; ?></td>
           <td><?php echo "$description"; } ?></td></tr>
           <tr><td>
           	<form action="" method="post">
           		<button name="submitt">Delete Old Notice</button>

           	</form>

           </td></tr>
 	</table>
 </center>
 </body>
 </html>
 <<?php 
if (isset($_POST['submitt'])) {
	
	$query="DELETE FROM `notice`;";
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