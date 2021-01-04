<!DOCTYPE html>
<html>
<head>
<title>ClientInfo</title>
<link rel="stylesheet" type="text/css" href="">
</head>
<body>



<div id="broker-content">
<div class="container">
<div class="row">
      <div class="col-md-10">
	  <h1 class="broker-heading">All Client Information</h1>
	  </div>
	  
	  <div class="col-md-2">
	  <a class="add-new" href=""></a>
	  </div>
	  
	  <div class="col-md-12">

<?php
include "config.php";
$query="SELECT * FROM clientinformation ORDER BY id DESC";
$result=mysqli_query($connection,$query) or die("Failed");

$count=mysqli_num_rows($result);

if($count>0)
{	
	    
?>	  
	  
	  <table class="content-table">
	  <thead>
	  <th>Id</th>
	  <th>Clentname</th>
	  <th>Client Address</th>
	   <th>Client ContactNo</th>
	   <th>Client Email</th>
	
	  
	  </thead>
	  
	  <tbody>
	  <?php
	  
	  while($row=mysqli_fetch_assoc($result))
	  {
		  
	  
	  
	  ?>
	  <tr>
	  
	  <td class="broker"><?php echo $row ['id'] ?></td>
	  
	  <td><?php echo $row['clientname'] ?></td>
	  <td><?php echo $row['clientaddress'] ?></td>
	  <td><?php echo $row['clientcontactno']?></td>
	  <td><?php echo $row['clientemail']?></td>
	  <td><?php 
	  
	 
	 
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