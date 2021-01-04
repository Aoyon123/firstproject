
<!DOCTYPE html>
<html>
<head>
<title>Broker_reg_from</title>
<link rel="stylesheet" type="text/css" href="">


<script>
	function validate() {
		var x = document.getElementById('username').value;
		var y = document.getElementById('propertytype').value;
		var z = document.getElementById('propertyprice').value;
		var a = document.getElementById('propertylocation').value;
		
		
		if(x == "") {
			document.getElementById('errorMsg').innerHTML = "Username is empty";
			document.getElementById('errorMsg').style.color = "red";
			return false;	
		}
		if(y == "") {
			document.getElementById('errorMsg').innerHTML = "Propertytype is empty";
			document.getElementById('errorMsg').style.color = "red";
			return false;	
		}
		if(z == "") {
			document.getElementById('errorMsg').innerHTML = "propertyprice is empty";
			document.getElementById('errorMsg').style.color = "red";
			return false;


       if(a == "") {
			document.getElementById('errorMsg').innerHTML = "propertylocation is empty";
			document.getElementById('errorMsg').style.color = "red";
			return false;	
		}
		return true;
	}
</script>
</head>

<div id="admin-content">
<div class="container">
<div class="row">
<div class="col-md-12">

<h1 class="admin-heading">Add Property</h1>
</div>

<div class="col-md-offset-3 col-md-6">
  
 <?php 
  if(isset($_POST["submit"]))
  {
	include 'config.php';
	
	$username=mysqli_real_escape_string($connection,$_POST['username']);
	$propertytype=mysqli_real_escape_string($connection,$_POST['propertytype']);
    $propertyprice=mysqli_real_escape_string($connection,$_POST['propertyprice']);
    $propertylocation=mysqli_real_escape_string($connection,$_POST['propertylocation']); 
    $role=mysqli_real_escape_string($connection,$_POST['role']);

    $query="SELECT username FROM addproperty2 WHERE username='$username'";
	$result=mysqli_query($connection,$query) or die("Query Failed.");
	
	$count=mysqli_num_rows($result);
	if($count>0)
	{
		echo "Username Already Exists.";
	}
	{
		$query1="INSERT INTO addproperty2 (username,propertytype,propertyprice,propertylocation,role)
		VALUE ('$username','$propertytype','$propertyprice','$propertylocation','$role')";
		
		$result=mysqli_query($connection,$query1)or die("Failed");
		if($result)
		{
			header("location:addpropertytable.php");
			
		}	
	}	
  }
  
  
 ?> 
  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off">
  
  <div class="form-group">
  <label>Broker UserName</label>
  <input type="text" name="username" class="form-control" placeholder="Broker UserName" required>
  </div>
  <br>
  
  <div class="form-group">
  <label>Property Type</label>
  <input type="text" name="propertytype" class="form-control" placeholder="Property Type" required>
  </div>
  <br>
   <div class="form-group">
  
  <label>Property Price</label>
  <input type="text" name="propertyprice" class="form-control" placeholder="Property Price" required>
  </div>
<br>

   <div class="form-group">
  
  <label>Property Location</label>
  <input type="text" name="propertylocation" class="form-control" placeholder="Property Location" required>
  </div>
  <br>
  <div class="form-group">
  
  <label>User Role</label>
  <select class="form-control" name="role">
  <option value ="1">Broker</option>
  <option value="2">Seller</option>
  <option value="3">Admin</option>
  <option value="4">User</option>
  </select>
  </div>
  
  
<br>
<input type="submit" name="submit" class="btn btn-primary" value="Add" required/>

</form>
</div>
</div>
</div>
</div>
 
</body>
</html>






