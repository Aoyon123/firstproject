<?php
if(isset($_POST["submit"]))
{
	include 'config.php';
	
    $username=mysqli_real_escape_string($connection,$_POST['username']);
	$propertytype=mysqli_real_escape_string($connection,$_POST['propertytype']);
    $propertyprice=mysqli_real_escape_string($connection,$_POST['propertyprice']);
    $propertylocation=mysqli_real_escape_string($connection,$_POST['propertylocation']); 
    $role=mysqli_real_escape_string($connection,$_POST['role']);

 $query2="UPDATE addproperty2 SET
 username='{$username}',
 propertytype='{$propertytype}',
 propertyprice='{$propertyprice}',
 propertylocation='{$propertylocation}',
 role='{$role}'  WHERE addproperty_id='{$addproperty_id}'";

 $result1=mysqli_query($connection,$query2)or die("Failed");
		if($result1)
		{
			header("location:addpropertytable.php");
			
		}

}

?>

<div id="broker-content">
<div class="container">
<div class="row">
<div class="col-md-12">
<h1 class="admin-heading">Modify If Any</h1>
</div>

<div class="col-md-offset-4 col-md-4">

<?php

$addproperty_id=$_GET['addproperty_id'];

include "config.php";
$query="SELECT * FROM addproperty2 WHERE addproperty_id={$addproperty_id}";

$result=mysqli_query($connection,$query) or die("Failed");

$count=mysqli_num_rows($result);

if($count>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		

?>

<form action="update_addproperty.php" method="POST">
<div class="form-group">
<input type="hidden" name="addproperty_id" class="form-control" value="<?php echo $row ['addproperty_id'] ?>" placeholder="">
</div>

<div class="form-group">
<label>Username</label>
<input type="text" name="username" class="form-control" value="<?php echo $row['username'] ?>" placeholder="" required>
</div>

<div class="form-group">
<label>Property Type</label>
<input type="text" name="propertytype" class="form-control" value="<?php echo $row['propertytype'] ?>" placeholder="" required>
</div>

<div class="form-group">
<label>Property Price</label>
<input type="text" name="propertyprice" class="form-control" value="<?php echo $row['propertyprice']?>" placeholder="" required>
</div>

<div class="form-group">
<label>Property Location </label>
<input type="text" name="propertylocation" class="form-control" value="<?php echo $row['propertylocation']?>" placeholder="" required>
</div>

<div class="form-group">
<label>Role</label>
<input type="text" name="role" class="form-control" value="<?php echo $row['role']?>" placeholder="" required>




</div>
<input type="submit" name="submit" class="btn btn-primary" value="Update
" required>
</form>

<?php
	}
	
}

?>
</div>
</div>
</div>