
<!DOCTYPE html>
<html>
<head>
<title>Broker_reg_from</title>
</head>
<body>
<h1 style="color:Green">Hey Broker</h1>

<style>
h1{text-align: center;}

</style>

<?php
ob_start();
session_start();
if($_SESSION['name']=="name")
{
	echo $_SESSION['uname'];
}
else
{
	header("location: login.php");
}
?>

</body>
</html>
