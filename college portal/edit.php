<?php 
session_start();
include 'connection.php';

$rollno=$_SESSION['srollno'];
?>

<form action="" method="post">
	<input type="text" name="name" value="<?php echo "$rollno" ?>"><br>
	<input type="submit" name="submit">
</form>

