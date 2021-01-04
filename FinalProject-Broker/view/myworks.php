<!DOCTYPE html>
<html>
<head>

<title></title>
<link rel="Stylesheet" href="test2.css">

</head>




<body>

<div class="center">
<ul>  
       <li><a class="active" href="">Here You Can</a></li><br>
	   <form action="" method="post">
	  
      <li><a href="updateindex.php">Personal Information Update And Delete</a></li><br>
	  </form>
	  <form action="changepassword.php" method="post">
      <li><a   href="changepassword.php">ChangePassword</a></li><br>
	  </form>
      <li><a href="cancelbookingindex2.php">CancelBooking</a></li><br>
	  
	  
	   <li><a  href="searchbooking.php">SearchBooking</a></li><br>
	   
	    <li><a  href="trackorderajax.php">Track Your Finalaization</a></li><br>
		
		<form action="addproperty.php" method="post">
      <li><a   href="addproperty.php">AddProperty And Update And Delete</a></li><br>
	  </form>
		
	    <li><a  href="viewpropertyinfo.php">ViewPropertyinformation</a></li><br>
		
		 <li><a  href="clientinformation.php">ViewClient Information</a></li><br>
		
		
	    <li><a  href="viewbookinglist.php">ViewBooking List</a></li><br>
		
		 <li><a  href="searchproperty.php">SearchProperty</a></li>
		 
		  
  <form action="login.php" method="post">
  <input style="color:green" type="submit" value="Log Out" name="">
  </form>
	
<?php
include 'fotter.php';
?>
	
</div>

</body>
</html>