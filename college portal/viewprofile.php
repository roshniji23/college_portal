<?php 

include 'connection.php';
session_start();
if (isset($_SESSION['email'])) {
	# code...

 ?>
 <html>
 <head>
 	<title></title>
 	<style type="text/css">
 		.table tr td{height: 50px; width: 200px; box-shadow: 10px 10px 10px  gray; border-radius: 10px; text-align: center; padding: 5px;}
 		.attribute{color: purple;}
 		.divji img{height: 300px; width: 300px; border-radius: 50%;}
 	</style>
 </head>
 <body>
 <div class="div1">

 <center>	
     <div class="divji"><?php   $kk=$_SESSION['image']; echo "<img src='$kk'>"; ?></div>
 	<table class="table">
 		<tr><td colspan="4"><h2><b>Admin Profile</b></h2></td></tr>
 		   
 		<tr><td><b>Admin ID:</b></td><td><?php  echo $_SESSION['id']; ?></td></tr>
 		<tr><td><b>Name:</b></td><td class="attribute"><?php  echo $_SESSION['name']; ?></td>
 			<td><b>Mobile:</b></td><td class="attribute"><?php  echo $_SESSION['mobile']; ?></td></tr>
 		<tr><td><b>Email:</b></td><td class="attribute"><?php  echo $_SESSION['email']; ?></td>
 			<td><b>Address:</b></td><td class="attribute"><?php  echo $_SESSION['address']; ?></td></tr>
 		<tr>	<td><b>State:</b></td><td class="attribute"><?php  echo $_SESSION['state']; ?></td>
 			<td><b>City:</b></td><td class="attribute"><?php  echo $_SESSION['city']; ?></td></tr>
 		<tr>	<td><b>Pincode:</b></td><td class="attribute"><?php  echo $_SESSION['pincode']; ?></td>
 			<td><b>Question:</b></td><td class="attribute"><?php  echo $_SESSION['que']; ?></td></tr>
 		<tr>	<td><b>Answer:</b></td><td class="attribute"><?php  echo $_SESSION['ans']; ?></td>
 			<td><b>DOB:</b></td><td class="attribute"><?php  echo $_SESSION['dob']; ?></td></tr>
 			<tr><td colspan="4"><a href="adminprofile.php">Go To Home Page........</a></td></tr>
 	</table></center>
 </div>
 </body>
 </html>
 <<?php } ?>