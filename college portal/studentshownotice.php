<?php 

include 'connection.php';

$query="select * from notice ";
$data=mysqli_query($con , $query);


 ?>

 <html>
 <head>
 	<title></title>
 	<style type="text/css">
 		.table tr td{ text-align: center; height: 100px; width: 200px; box-shadow: 3px 3px 3px gray; }
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
 	</table>
 </center>
 </body>
 </html>