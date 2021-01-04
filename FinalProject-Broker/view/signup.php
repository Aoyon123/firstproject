<?php

	$usernameerror = "";

	$emailerror ="";
	
	$passworderror="";
	$username=$email=$password="";
?>

<?php

if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$email=$_POST['email'];
    $password=$_POST['password'];



$connection =mysqli_connect('localhost','root','','final6');
  if(!$connection)
  {
	  die("Not Connected.".mysqli_error());
  }
  

    $query= "INSERT INTO final6pro(username,email,password)";
  $query.="VALUES ('$username','$email','$password')";
  
  $result=mysqli_query($connection,$query);
  
  if(!$result)
  {
	  die("Not Success".mysqli_error());
  }
  
  
  
}
  
 
?>


<!DOCTYPE html>
<html>
<head>
<title>Broker_reg_from</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<style>
h1 {text-align: center;}
h3{text-align: center;}
div {text-align: center;}
</style>

<h1 style="color:red">Broker Registration Form</h1>
<h3 style="color:red">Please Fillup This Form</h3>
<div>
<form action="signup.php" method="post">
  
 <label style="color:blue" for="username">User Name:</label><?php echo $usernameerror ; ?><br>
  <input type="text" id="username" name="username" value="" ><br>
 
<label  style="color:blue" for="email">Email Address:</label><?php echo $emailerror ; ?><br>
  <input type="email" id="email" name="email" value="" ><br> 
 
<label style="color:blue" for="password">Password:</label><?php echo $passworderror ; ?><br>
  <input type="text" id="password" name="password" value="" placeholder ="enter your password" ><br><br>
  
   
  
  <button type="submit" name="submit">Sign Up</button>
 
 <input type="reset" value="reset">
 
 <a href="login.php" class="ca">Already have an account?</a>
   
<?php
echo "<p>All Rights Reserved; 1999-" . date("Y") . "</p>";
?>
 </form>
 </div>
 </body>
 </html>