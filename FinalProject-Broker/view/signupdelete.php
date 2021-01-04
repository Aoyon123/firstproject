<?php

$connection =mysqli_connect('localhost','root','','final6');
 if(!$connection)
  {
	  die("Not Connected.".mysqli_error($connection));
  }
  
  
  $receive=$_REQUEST['edit_id'];
  
  $query="DELETE FROM final6pro WHERE id=$receive";
  $run_delete_query=mysqli_query($connection,$query);
  
  if($run_delete_query)
  {
	  header("location:updateindex.php?DataDeleted");
  }
  ?>