<?php 
session_start();
include 'connection.php';


 ?>
<style type="text/css"> 
.table1 tr td{height: 50px; width: 200px; box-shadow: 5px 5px 5px gray; text-align: center;}
</style>
<form action="" method="post">
<center><table class="table1"><tr><td colspan="4"><h2><b>Seach Notes</b></h2></td></tr>
 <tr><td>Enter Subject Name </td> <td><input type="text" name="sname"></td><td><input type="submit" name="submit" value="Search"></td><td><a href="uploadnotes.php">Upload notes</a></td></tr>

</table></center></form>




 <?php 

if (isset($_POST['submit'])) {
	
	$sname=$_POST['sname'];
	$query="select * from notes where subject='$sname'";
	$data=mysqli_query($con , $query);
	if ($data) {
          
         
          
		?>

<style type="text/css">
.table tr td{ width: 300px; box-shadow: 5px 5px 5px gray; text-align: center } 
	.yyyy img{height: 200px; width: 200px;}


</style>
	<center><table class="table"><tr><td><h3><b><?php 

	  while($result=mysqli_fetch_assoc($data)) {
               
     
	  ?></b></h3></td></tr><tr>
    <td class="yyyy">

    	<?php 
       $image=$result['notes'];
      echo "<img src='$image'>"."</tr>"."<tr><td>"."<a href='$image' download>download</a>";  }}} ?></td></tr>

	</table></center>
	
		