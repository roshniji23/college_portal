 <?php 
include 'connection.php';
session_start();
 ?> 

<html>
<head>
	<title></title>
	<style type="text/css">
		.div1{height: 800px; width: 1000px; background-color: chocolate;  position: relative; left: 100px;}
		.div2{height: 50px; width: 200px; background-color: lightgray;  position: relative; left: 5px; top: 10px; padding: 20px; box-shadow: 10px 10px 10px  gray; border-radius: 10px;}
		.div3{height: 50px; width: 680px; background-color: lightgray;  position: absolute; left: 270px; top: 10px; padding: 20px; box-shadow: 10px 10px 10px  gray; border-radius: 10px; letter-spacing: 1px; word-spacing: 40px;}
		.div4{height: 170px; width: 200px; background-color: lightgray;  position: absolute; left: 5px; top: 115px; padding: 20px; box-shadow: 10px 10px 10px  gray; border-radius: 10px;}
		.div5{height: 250px; width: 680px; background-color: lightgray;  position: absolute; left: 270px; top: 115px; padding: 20px; box-shadow: 10px 10px 10px  gray; border-radius: 10px;}
		.div6{height: 150px; width: 200px; background-color: lightgray;  position: absolute; left: 5px; top: 340px; padding: 20px; box-shadow: 10px 10px 10px  gray; border-radius: 10px;}
		.div7{height: 200px; width: 200px; background-color: lightgray;  position: absolute; left: 5px; top: 540px; padding: 20px; box-shadow: 10px 10px 10px  gray; border-radius: 10px;}
		.div88{height: 300px; width: 680px; position: absolute; left: 270px; top: 115px; background-color: lightgray; padding: 20; box-shadow: 10px 10px 10px  gray; border-radius: 10px; }




.profileimg img{height: 160px; width: 200px; border-radius: 50%;}
.table2 tr td{ height: 100px; width: 200px; }

	</style>
</head>
<body>
	
<div class="div1">
	<div class="div2"><h3>Welcome To XYZ College</h3></div>
	<div class="div3">
		<a href="Complane.php">Complane</a>
		<a href="#">Home</a>
		<a href="help.php">Help</a>
	
		
		<a href="studentlogout.php">Logout</a>
	</div>
	<div class="div4">
		
 		 <div class="profileimg">
 		 	<?php
 		 	
             
      $kk=$_SESSION['image']; echo "<img src='$kk'>"."<br>"; 
       
     ?><b><center>
<?php   $dd=  $_SESSION['fullname'];  echo "$dd" ; 

?></center><b>
 		 </div>
       
	</div>
	
	
	<div class="div6">
		<h3>PROFILE</h3>
    
       <h4><b><a href="changestudentpassword.php">Change Password</a></b></h4>
	</div>
	<div class="div7">
		
			<h3>College</h3>
     <h4><b><a href="notesstudent.php">Notes</a></b></h4>
      <h4><b><a href="studentsshowresult.php">Results</a></b></h4>
       <h4><b><a href="halltickets.php">Hall Tickets</a></b></h4>
      <h4><b><a href="studentshownotice.php">Notice</a></b></h4>
     
      
	</div>
	<div class="div88"><center><table class="table2">
		<tr><td><b>Enrollment Number</b></td><td><?php $gg=$_SESSION['rollno']; echo "$gg"; ?></td><td><b>Address</b></td><td><?php $gg=$_SESSION['address']; echo "$gg"; ?></td></tr>
  <tr><td><b>Fathers Name</b></td><td><?php $gg=$_SESSION['fathername']; echo "$gg"; ?></td><td><b>Semester</b></td><td><?php $gg=$_SESSION['sem']; echo "$gg"; ?></td></tr>
	<tr><td><b>PaidFee</b></td><td><?php $gg=$_SESSION['paidfee']; echo "$gg"; ?></td><td><b>TotalFee</b></td><td><?php $gg=$_SESSION['totalfee']; echo "$gg"; ?></td></tr>	
	</table></center></div>
</div>

</body>
</html>