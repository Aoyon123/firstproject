
<?php


	

 /*$FirstNameerror = "";
	$LastNameerror = "";
	$PhoneNumbererror = "";
	$EmailAddresserror ="";
	$Addresserror ="";
	$Passworderror="";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(empty($_REQUEST["FirstName"]))
    {
        $FirstNameerror ="please enter the First name";
    }
    
    else
    {
        $FirstName = $_REQUEST["FirstName"]; 
    }
    
    if(empty($_REQUEST["LastName"]))
    {
        $LastNameerror ="please enter the Last name";
    }
    
    else
    {
        $LastName = $_REQUEST["LastName"]; 
    }
    
    
    if(empty($_REQUEST["PhoneNumber"]))
    {
        $PhoneNumbererror ="please enter the Phone number";
    }
    
    else
    {
        $PhoneNumber = $_REQUEST["PhoneNumber"]; 
    }
    
    
    if(empty($_REQUEST["EmailAddress"]))
    {
        $EmailAddresserror ="please enter the Email address";
    }
    
    else
    {
        $EmailAddress = $_REQUEST["EmailAddress"]; 
    }
    
    if(empty($_REQUEST["Address"]))
    {
        $Addresserror ="please enter the Address";
    }
    
    else
    {
        $Address = $_REQUEST["Address"]; 
    }
    
    
    if(empty($_REQUEST["Password"]))
    {
        $Passworderror ="please enter the Password";
    }
    
    else
    {
        $Password = $_REQUEST["Password"]; 
    }
    
   
//echo readfile("pp.txt");

 

        /*How to write/

		 if(empty($_REQUEST["FirstName"]))
		 {
			 echo "text file is blank <br> click here to <a href='/RB/View/signup.php'>Try again</a>";
		 }
		else
		{
        $fileW = fopen("../data/newuser.txt", "a+") or die("Unable to open file");

		fwrite($fileW, $EmailAddress.",");
        fwrite($fileW, $FirstName.",");
        fwrite($fileW, $LastName.",");
		fwrite($fileW, $PhoneNumber.",");
		fwrite($fileW, $Address);
		fwrite($fileW, "\n");
		fclose($fileW);
		
		
		$fileW = fopen("../data/user.txt", "a+") or die("Unable to open file");
		fwrite($fileW, "\n");
		fwrite($fileW, $EmailAddress.",");
		fwrite($fileW, $Password);
		
		fclose($fileW);}
		*/
		
		
		require_once('../data/config.php');
		
		if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$email=$_POST['email'];
    $password=$_POST['password'];
	
		$username=$email=$password="";
		
        $username=$_POST['username']
		$email= $_POST['email'];
		
		$password= $_POST['password'];
		
		
		$sql= "INSERT INTO final6pro (username,email,password)
		       VALUES ('$username,'$email,'$password')";
			   
		$result=mysqli_query($conn,$sql);
		
		if($result)
		{
			header ("Location: ../view/login.php");
		}
		else
		{
			echo "ERROR:".$sql;
		}
       
		
		
		
 



/*?><!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
</head>
<body>
<style>
	h1  {text-align: center;}
	div {text-align: center;}	
</style>
<h1>Sign up , for new account</h1>
<div>
<form action="/RB/view/signup.php" method="POST">
  <label style="color:blue" for="FirstName">First name:</label><?php echo $FirstNameerror ; ?><br>
  <input type="text" id="FirstName" name="FirstName" value=""><br>
  
  <label style="color:blue" for="LastName">Last name:</label><?php echo $LastNameerror ; ?><br>
  <input type="text" id="LastName" name="LastName" value=""><br>
  
  <label  style="color:blue" for="PhoneNumber">Phone Number:</label><?php echo $PhoneNumbererror ; ?><br>
  <input type="text" id="rPhoneNumber" name="PhoneNumber" value=""><br>
  
  <label  style="color:blue" for="EmailAddress">Email Address:</label><?php echo $EmailAddresserror ; ?><br>
  <input type="email" id="EmailAddress" name="EmailAddress" value=""><br>
  <label style="color:blue" for="Address">Address:</label><?php echo $Addresserror;?><br>
  <input type="address" id="Address" name="Address" value=""><br>
  
  <label style="color:blue" for="Password">Password:</label><?php echo $Passworderror ; ?><br>
  <input type="text" id="Password" name="Password" value="" placeholder ="enter your password"><br><br>
  
    <input style="color:green" type="submit" value="Back">
  <br><br>
  

</form>
<form action="/RB/View/login.php" method="post">
	<input style="color:green" type="submit" value="Log in" >
</form>
</div>
<h1>
	
    <?php include '../view/fotter.php' ?>
	
</h1>
</body>
</html>*/
?>
