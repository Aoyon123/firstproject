
<?php
//$BrokerFirstNameerror = "";
$BrokerUserNameerror = "";
$BrokerPhoneNumbererror = "";
$BrokerEmailAddresserror ="";
$BrokerGendererror ="";
$BrokerPassworderror="";

$BrokerUserName=$BrokerPhoneNumber=$BrokerEmailAddress=$BrokerGender=$BrokerPassword="";

?>

<!DOCTYPE html>
<html>
<head>
<title>Broker_reg_from</title>
</head>
<body>

<?php

Include ('header.php');

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
  <label style="color:blue" for="BrokerFirstName">First name:</label><?php// echo $BrokerFirstNameerror ; ?><br>
  <input type="text" id="BrokerFirstName" name="BrokerFirstName" value="" ><br>
 --> 
  <label style="color:blue" for="BrokerUserName">User name:</label><?php echo $BrokerUserNameerror ; ?><br>
  <input type="text" id="BrokerUserName" name="BrokerUserName" value="" ><br>
  
  <label style="color:blue" for="BrokerPhoneNumber">Phone Number:</label><?php echo $BrokerPhoneNumbererror ; ?><br>
  <input type="text" id="BrokerPhoneNumber" name="BrokerPhoneNumber" value=""  ><br>
  
  <label style="color:blue" for="BrokerEmailAddress">Email Address:</label><?php echo $BrokerEmailAddresserror ; ?><br>
  <input type="text" id="BrokerEmailAddress" name="BrokerEmailAddress" value="" ><br>
  
 <p>Please select your gender:</p><?php echo $BrokerGendererror ; ?>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>

<br>
  
  <label for="BrokerPassword">Password:</label><?php echo $BrokerPassworderror ; ?><br>
  <input type="text" id="BrokerPassword" name="BrokerPassword" value="" ><br><br>
  <input type="submit" value="Submit">
  <input type="reset" value="reset">

  <br><br>
</form>


</body>
</html>