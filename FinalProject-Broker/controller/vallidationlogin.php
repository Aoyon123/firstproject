<?php
 include('../data/config.php');
 $email=$Password="";
 $username = $_POST['username'];
 $password = $_POST['password'];

 
 
 $sql = "SELECT * FROM final6pro WHERE username='$username' AND password='$password'";
 $result = mysqli_query($connection,$sql);
 if(mysqli_num_rows($result)>0)
 {
	 while($row= mysqli_fetch_assoc($result))
	 {
		 $id=$row["id"];
		 $username=$row["username"];
		 session_start();
		 $_SESSION['id']=$id;
		 $_SESSION['username']=$username;
	 }
	 header("Location: ../view/myworks.php");
 }
 else
 {
	 echo "Invalid Username or Password";
 }




?>