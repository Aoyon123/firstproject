<?php

$connection =mysqli_connect('localhost','root','','final6');
 if(!$connection)
  {
	  die("Not Connected.".mysqli_error($connection));
  }
  
  if(isset($_REQUEST['edit_id']))
  {
	  $received_id=$_REQUEST['edit_id'];
	  
	  $get_info="SELECT * FROM final6pro WHERE id=$received_id";
	  
	  $select_info=mysqli_query($connection,$get_info);
	  while($row=mysqli_fetch_assoc($select_info))
	  {
		  
?>

<form action="updatesignup.php" method="post">

<input type="text" name="username" value="<?php echo $row['username']; ?>" placeholder="username">
<input type="email" name="email"  value="<?php echo $row['email']; ?>" placeholder="email">
<input type="password" name="password" value="<?php echo $row['password']; ?>" placeholder="password">
<input type="submit" name="submit" value="Update Data">	  
<input type="hidden" name="updating_hidden_id" value="<?php echo $received_id; ?> ">


</form>


<?php
	  }
  }
  ?>