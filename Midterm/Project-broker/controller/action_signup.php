<?php
//$BrokerFirstNameerror = "";
$BrokerUserNameerror = "";
$BrokerPhoneNumbererror = "";
$BrokerEmailAddresserror ="";
$BrokerGendererror ="";
$BrokerPassworderror="";

$BrokerUserName=$BrokerPhoneNumber=$BrokerEmailAddress=$BrokerGender=$BrokerPassword="";


if($_SERVER["REQUEST_METHOD"] == "POST")
{
	
	
	
	if(empty($_REQUEST["BrokerUserName"]))
	{
		$BrokerUserNameerror ="please enter ";
	}
	
	else
	{
		$BrokerUserName = $_REQUEST["BrokerUserName"]; 
	}
	
	
	if(empty($_REQUEST["BrokerPhoneNumber"]))
	{
		$BrokerPhoneNumbererror ="please enter ";
	}
	
	else
	{
		$BrokerPhoneNumber = $_REQUEST["BrokerPhoneNumber"]; 
	}
	
	
	if(empty($_REQUEST["BrokerEmailAddress"]))
	{
		$BrokerEmailAddresserror ="please enter ";
	}
	
	else
	{
		$BrokerEmailAddress = $_REQUEST["BrokerEmailAddress"]; 
	}
	
	if(empty($_REQUEST["BrokerGender"]))
	{
		$BrokerGendererror ="please enter ";
	}
	
	else
	{
		$BrokerGender = $_REQUEST["BrokerGender"]; 
	}
	
	
	if(empty($_REQUEST["BrokerPassword"]))
	{
		$BrokerPassworderror ="please enter ";
	}
	
	else
	{
		$BrokerPassword = $_REQUEST["BrokerPassword"]; 
	}
	
$fileW = fopen("../data/pp.txt", "w") or die("Unable to open file");


//fwrite($fileW, $BrokerFirstName);
fwrite($fileW, $BrokerUserName);
fwrite($fileW, $BrokerPhoneNumber);
fwrite($fileW, $BrokerEmailAddress);
fwrite($fileW, $BrokerGender);
fwrite($fileW, $BrokerPassword);


fclose($fileW);	



		
		
		$fileW = fopen("../data/login.txt", "w") or die("Unable to open file");
		fwrite($fileW, "\n");
		fwrite($fileW, $BrokerUserName.",");
		fwrite($fileW, $BrokerPassword);
		
		fclose($fileW);
		
		

	
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Broker_reg_from</title>
</head>
<body>

<?php

Include ('../view/header.php');

?>


<style>
h1 {text-align: center;}
h3{text-align: center;}
div {text-align: center;}
</style>

<h1 style="color:red">Broker Registration Form</h1>
<h3 style="color:red">Please Fillup This Form</h3>


<form action="../controller/action_signup.php" method="POST">
<!--
  <label for="BrokerFirstName">First name:</label><?php// echo $BrokerFirstNameerror ; ?><br>
  <input type="text" id="BrokerFirstName" name="BrokerFirstName" value="" ><br>
  -->
  <label for="BrokerUserName">User name:</label><?php echo $BrokerUserNameerror ; ?><br>
  <input type="text" id="BrokerUserName" name="BrokerUserName" value="" ><br>
  
  <label for="BrokerPhoneNumber">Phone Number:</label><?php echo $BrokerPhoneNumbererror ; ?><br>
  <input type="text" id="BrokerPhoneNumber" name="BrokerPhoneNumber" value="" ><br>
  
  <label for="BrokerEmailAddress">Email Address:</label><?php echo $BrokerEmailAddresserror ; ?><br>
  <input type="text" id="BrokerEmailAddress" name="BrokerEmailAddress" value="" ><br>
  
  <p>Please select your gender:</p><?php echo $BrokerGendererror ; ?>
  
  <input type="radio" id="male" name="gender" value="male">
  
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>

  
  <label for="BrokerPassword">Password:</label><?php echo $BrokerPassworderror ; ?><br>
  <input type="text" id="BrokerPassword" name="BrokerPassword" value="" ><br><br>
  <input type="submit" value="Submit">
  <input type="reset" value="reset">

  <br><br>
</form>






</body>
</html>




















