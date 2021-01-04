<?php 
$username=$password="";?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="myworks.php" method="post">
     	<h2>LOG IN</h2>
     	
        <p class="error"></p>
     	
     	<label>User Name</label>
     	<input type="text" name="username" placeholder="User Name" required><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password" required><br>

     	<button type="submit" name="submit" >Log in</button>
          <a href="signup.php" class="ca">Create an account</a>
     </form>
	
</body>
</html>