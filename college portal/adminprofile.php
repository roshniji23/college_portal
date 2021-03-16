 <?php 
include 'connection.php';
session_start();
 ?> 

<html>
<head>
	<title></title>
	<style type="text/css">
		.div1{height: 900px; width: 1000px; background-color: chocolate;  position: relative; left: 100px;}
		.div2{height: 50px; width: 200px; background-color: lightgray;  position: relative; left: 5px; top: 10px; padding: 20px; box-shadow: 10px 10px 10px  gray; border-radius: 10px;}
		.div3{height: 50px; width: 680px; background-color: lightgray;  position: absolute; left: 270px; top: 10px; padding: 20px; box-shadow: 10px 10px 10px  gray; border-radius: 10px; letter-spacing: 1px; word-spacing: 40px;}
		.div4{height: 170px; width: 200px; background-color: lightgray;  position: absolute; left: 5px; top: 115px; padding: 20px; box-shadow: 10px 10px 10px  gray; border-radius: 10px;}
		.div5{height: 250px; width: 680px; background-color: lightgray;  position: absolute; left: 270px; top: 115px; padding: 20px; box-shadow: 10px 10px 10px  gray; border-radius: 10px;}
		.div6{height: 150px; width: 200px; background-color: lightgray;  position: absolute; left: 5px; top: 340px; padding: 20px; box-shadow: 10px 10px 10px  gray; border-radius: 10px;}
		.div7{height: 300px; width: 200px; background-color: lightgray;  position: absolute; left: 5px; top: 540px; padding: 20px; box-shadow: 10px 10px 10px  gray; border-radius: 10px;}


		.div11{height: 80px; width:150px; background-color: red;border-radius: 5px; text-align: center;}
		.div22{height: 80px; width:150px; background-color: red;border-radius: 5px; text-align: center; position: absolute; left: 190px; top: 40px;}

.div33{height: 80px; width:150px; background-color: red;border-radius: 5px; text-align: center; position: absolute; left:365px; top: 40px;}
.div44{height: 80px; width:150px; background-color: red;border-radius: 5px; text-align: center; position: absolute; left: 550px; top: 40px;}

.div55{height: 80px; width:150px; background-color: red; border-radius: 5px; text-align: center; position: absolute; }
		.div66{height: 80px; width:150px; background-color: red;border-radius: 5px; text-align: center; position: absolute; left: 190px; top: 140px;}

.div77{height: 80px; width:150px; background-color: red;border-radius: 5px; text-align: center; position: absolute; left:365px; top: 140px;}
.div88{height: 80px; width:150px; background-color: red;border-radius: 5px; text-align: center; position: absolute; left: 550px; top: 140px;}
.profileimg img{height: 160px; width: 200px; border-radius: 50%;}

	</style>
</head>
<body>
	
<div class="div1">
	<div class="div2"><h3>Welcome To XYZ College</h3></div>
	<div class="div3">
		<a href="#">Home</a>
		<a href="student.php">student</a>
		
		<a href="logout.php">Logout</a>
	</div>
	<div class="div4">
		
 		 <div class="profileimg">
 		 	<?php
 		 	
             
      $kk=$_SESSION['image']; echo "<img src='$kk'>"; 
       echo "<center><b>"; echo $_SESSION['name']; echo "</b></center>";
     ?>

 		 </div>

	</div>
	<div class="div5">
		
	    
		              <div class="div11"><h4>BE STUDENT<br> 
		              	<?php 
              $query="select * from studentregister where course='be'";
              $data=mysqli_query($con , $query);
              $result=mysqli_num_rows($data);
              echo "$result";

              ?></h4></div>
 					<div class="div22"><h4>MCA STUDENT<br>
                       <?php 
              $query="select * from studentregister where course='mca'";
              $data=mysqli_query($con , $query);
              $result=mysqli_num_rows($data);
              echo "$result";

              ?>
 					</h4></div>
 					<div class="div33"><h4>BCA LECTURER<br>
                    <?php 
              $query="select * from studentregister where course='bca'";
              $data=mysqli_query($con , $query);
              $result=mysqli_num_rows($data);
              echo "$result";

              ?>

 					</h4></div>
 					
 					<div class="div44"><h4>STAFF NOTICE</h4></div>
 					<div class="div55"><h4>STUDENTS NOTICE<br>
                       <?php 
              $query="select * from studentregister where course='notice'";
              $data=mysqli_query($con , $query);
              $result=mysqli_num_rows($data);
              echo "$result";

              ?>


 					</h4></div>
 					<div class="div66"><h4>RESULT</h4></div>
 					<div class="div77"><h4>COMPLAINTS</h4></div> 

		</div>
	
	<div class="div6">
		<h3>PROFILE</h3>
     <h4><b><a href="viewprofile.php">View Profile</a></b></h4>
      <h4><b><a href="updateadminprofile.php">Update</a></b></h4>
       <h4><b><a href="adminchangepass.php">Change Password</a></b></h4>
	</div>
	<div class="div7">
		
			<h3>College</h3>
     <h4><b><a href="student.php">Student</a></b></h4>
      <h4><b><a href="addstaff.php">Staff</a></b></h4>
       <h4><b><a href="notice.php">Notice</a></b></h4>
      <h4><b><a href="result.php">Result</a></b></h4>
      <h4><b><a href="view.php">View</a></b></h4>
       <h4><b><a href="news.php">News Updates</a></b></h4>
	</div>
</div>

</body>
</html>