<?php

$connection =mysqli_connect('localhost','root','','final6');
 if(!$connection)
  {
	  die("Not Connected.".mysqli_error($connection));
  }
  
  
  $receive=$_REQUEST['bookingid'];
  
  $query="DELETE FROM booking WHERE bookingid=$receive";
  $run_delete_query=mysqli_query($connection,$query);
  
  if($run_delete_query)
  {
	  header("location:cancelbookingindex2.php?DataDeleted");
  }
  ?>