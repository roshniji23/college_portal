<?php 
session_start();
include 'connection.php';
$rollno=$_SESSION['rollno'];

$query="select * from admitji where rollno='$rollno'";
$data=mysqli_query($con , $query);

if ($data) {
	$result=mysqli_fetch_assoc($data);
$admitcard=$result['admitcard'];
	




  ?>
  <style type="text/css">
  	
.hi img{ height: 200px; width: 200px;}
  </style>

<div class="hi"><?php  echo "$rollno"; echo "<img src='$admitcard' >"."<a href='$admitcard' download>download</a>";} ?></div>