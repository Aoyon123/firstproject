
<?php

          //$BrokerUserNameerror = "";
		  $BrokerUserNameerror = "";
		  $BrokerPassworderror="";
		  $BrokerPassword="";
		  
	  	$UnameError = "";
	  	$Uname = "";
		
$BrokerUserName=$BrokerPassword="";		
		
	  	
if($_SERVER["REQUEST_METHOD"] == "POST") {

	if(empty($_REQUEST["BrokerUserName"]))
	{
		$BrokerUserNameerror ="please enter ";
	}
	
	else
	{
		$BrokerUserName = $_REQUEST["BrokerUserName"]; 
	}
			
		



	if(empty($_REQUEST["BrokerPassword"]))
	{
		$BrokerPassworderror ="please enter ";
	}
	
	else
	{
		$BrokerPassword = $_REQUEST["BrokerPassword"]; 
	}

			$myfile=fopen("../data/login.txt","r") or die("Unable to open file!");
			while($line=fgets($myfile))
				
			{
			$words=explode(",",$line);
			$user=$words[0];
			$pass=$words[1];
			}
			fclose($myfile);
			
			if($BrokerUserName=$user && $BrokerPassword=$pass)
			{
				session_start();
				//$_SESSION['name']="name";
			$_SESSION['BrokerUserName']=$user;
			header("location: myworks.php");
				
			}
			
		else {
				echo "Login Failed,Try Again ";
			}
			
		} 
		
	?>
<!DOCTYPE html>
<html>

 <head>
 <title>Login Form</title>
 
 
 </head>
 <body>
 
 <?php 

Include ('header.php');


?>
 
 
     <h1>Login Here</h1>
	 <form action = "" method = "post">
	 <label for="BrokerUserName">USER NAME:</label><br><?php echo  $BrokerUserNameerror; ?><br/>
  <input type="text" id="BrokerUserName" name="BrokerUserName" value=""><br><br>
  <label for="BrokerPassword">PASSWORD:</label><br>
  <?php echo $BrokerUserNameerror; ?><br/>
  <input type="text" id="password" name="password" value=""><br><br>
  
  <input type="Submit" value="Login">
	 
 </form>
 
 </body>
 </html>