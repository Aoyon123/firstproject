<!DOCTYPE html>
<html>
<title>Items</title>
<body>
<?php 
include('header.php'); 
?>
<h1>Add items</h1>
<form action="../controller/action_addproperty.php" method="POST" >
	<label for="pname" >Items Name</label>
	<input type="text" name="pname" id="pname"  >
	<br>
	<br>
	
	<label for="pcat" >Cetagory</label>
	<select name="pcat" id="pcat" >
		<option selected disabled>Which One</option>
		<option value="salads" >Flat</option>
		<option value="desserts" >Land</option>
	
	</select>
	<br>
	<br>
	
	<label for="pQty" >Quantity: </label>
	<input type="number" name="pQty" id="pQty" min="1" max="100"  >
	<br>
	<br>
	<label for="pprice" >Price</label>
	<input type="text" name="pprice" id="pprice" placeholder="Enter Price" >
	<br>
	<br>
 <input type="Submit" name="formAddItems" value="Add Items" >
 <input type="reset" >