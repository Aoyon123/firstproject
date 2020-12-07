<?php

$currenterror = "";
$newerror = "";


$current_password=$new_password="";


if($_SERVER["REQUEST_METHOD"] == "POST")
{
	
	
	
	if(empty($_REQUEST["current_password"]))
	{
		$currenterror ="please enter ";
	}
	
	else
	{
		$current_password = $_REQUEST["current_password"]; 
	}
	
	
	if(empty($_REQUEST["new_password"]))
	{
		$newerror ="please enter ";
	}
	
	else
	{
		$new_password = $_REQUEST["new_password"]; 
	}
	
	
	
	$fileW = fopen("../data/password.txt", "w") or die("Unable to open file");
	
	
	fwrite($fileW, $current_password);
    fwrite($fileW, $new_password);
	
	fclose($fileW);
	
}


?>




<!DOCTYPE html>
<html>
<head>
<title>changepassword</title>
<link rel="Stylesheet" href="">

</head>


<body>

<form action="../controller/action_changepassword.php" method="post">

  <form action="../controller/action_logout.php" method="post">
  <input style="color:green" type="submit" value="Log Out" name="">
  </form>
  <br>

  <form action="myworks.php" method="post">
  <input style="color:green" type="submit" value="Back" name="">
  </form> 
<div>
<h2>Change Password</h2>
<form action="" method="POST"></form>
<table>
<tr>
    <td>Current Password: </td> <?php $currenterror; ?>
	<td><input type="text" name=""></td>
</tr>

<tr>
    <td>New Password:</td> <?php $newerror; ?>
	<td><input type="text" name=""></td>
</tr>

 <input type="submit" value="Submit">


</div>
 </form>
</body>
</html>