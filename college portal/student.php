<?php 
session_start();
include 'connection.php';
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<style type="text/css">
 		.table tr td {text-align: center ; height: 60px; width: 200px; box-shadow: 5px 5px 5px gray; text-decoration: none;}
 		.table tr td a{text-decoration: none;}
 
 	}
 	</style>
 </head>
 <body>
 <div><center>
 	<table class="table">
 		<tr><td colspan="5"><b><h2>Student Department</h2></b></td></tr>
 		<tr><td><a href="addnewstudent.php">Add New</a></td>
         <td><a href="searchstudent.php">Search</a></td>
         <td><a href="notice.php">Notice</a></td>
         <td><a href="uploadhalltickets.php">Hall Ticket</a></td>
         <td><a href="studentsshowresult.php">Result</a></td>
 		</tr>
 		<tr>
 			<td><h2>BE Student<br>
             <?php 
              $query="select * from studentregister where course='be'";
              $data=mysqli_query($con , $query);
              $result=mysqli_num_rows($data);
              echo "$result";

              ?></h2>
 			</td>
 			<td><h2>BCA Student<br>
             <?php 
              $query="select * from studentregister where course='bca'";
              $data=mysqli_query($con , $query);
              $result=mysqli_num_rows($data);
              echo "$result";

              ?></h2>
              <td><h2>MCA Student<br>
             <?php 
              $query="select * from studentregister where course='mca'";
              $data=mysqli_query($con , $query);
              $result=mysqli_num_rows($data);
              echo "$result";

              ?></h2>
              <td><h2>BSC Student<br>
             <?php 
              $query="select * from studentregister where course='bsc'";
              $data=mysqli_query($con , $query);
              $result=mysqli_num_rows($data);
              echo "$result";

              ?></h2>
               <td><h2> Student Notice<br>
             <?php 
              $query="select * from notice ";
              $data=mysqli_query($con , $query);
              $result=mysqli_num_rows($data);
              echo "$result";

              ?></h2>
 			</td>
 		</tr>
 		
 			
 		</tr>
 	</table></center>>
 </div>
 </body>
 </html>