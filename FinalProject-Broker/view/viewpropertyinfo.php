<!DOCTYPE html>
<html>
<head>
<title>Broker_reg_from</title>
<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>



<div id="broker-content">
<div class="container">
<div class="row">
      <div class="col-md-10">
	  <h1 class="broker-heading">All Property Information</h1>
	  </div>
	  
	  <div class="col-md-2">
	  <a class="add-new" href="addproperty.php">Add Property</a>
	  </div>
	  
	  <div class="col-md-12">

<?php
include "config.php";
$query="SELECT * FROM addproperty2 ORDER BY addproperty_id DESC";
$result=mysqli_query($connection,$query) or die("Failed");

$count=mysqli_num_rows($result);

if($count>0)
{	
	    
?>	  
	  
	  <table class="content-table">
	  <thead>
	  <th>Id</th>
	  <th>Username</th>
	  <th>Property Type</th>
	   <th>Property Price</th>
	   <th>Property Location</th>
	   <th>Role</th>
	  
	  </thead>
	  
	  <tbody>
	  <?php
	  
	  while($row=mysqli_fetch_assoc($result))
	  {
		  
	  
	  
	  ?>
	  <tr>
	  
	  <td class="broker"><?php echo $row ['addproperty_id'] ?></td>
	  
	  <td><?php echo $row['username'] ?></td>
	  <td><?php echo $row['propertytype'] ?></td>
	  <td><?php echo $row['propertyprice']?></td>
	  <td><?php echo $row['propertylocation']?></td>
	  <td><?php 
	  
	  if($row['role']==1)
	  {
		  echo "Broker";
		  
	  }
	  else
	  {
		  echo "Seller";
	  }
	 
	  ?></td>
	  
	  
	  
	  
	  
	  </tr>
	  
	  <?php 
	  }
	  ?>
	  
	  </tbody>
	  
	  <?php
	  } 
	  ?>
	  
	  
	</table>
   <ul class="pagination admin-pagination">


</ul>
</div>
</div>
</div>
</div>
  </body>
  </html>
  
	  
	  
	  
	  
	  
	  