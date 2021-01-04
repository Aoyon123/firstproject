<?php

$connection =mysqli_connect('localhost','root','','final6');
 if(!$connection)
  {
	  die("Not Connected.".mysqli_error($connection));
  }

$query="SELECT * FROM booking";

$aoyon=mysqli_query($connection,$query);
$count=mysqli_num_rows($aoyon);

if ($count>0)
{
	if(isset($_REQUEST['deleted']))
	{
		echo "<font color='green'>Data Deleted</font>";
	}
	
	?>

<table class="table">
  <thead class="thead-dark">
 <tr>
 <th>Id</th>
	  <th>Clentname</th>
	  <th>Client ContactNo</th>
	  <th>Booked Property Type</th>
	  <th>Booked Property Location</th>
	  <th>Booked Token No</th>
      <th>What You Want To Do</th>
 </tr>
 </thead>
 
 <?php
 
 while ($row=mysqli_fetch_assoc($aoyon))
 {
	 $db_id=$row['bookingid'];
	 $clientname=$row['clientname'];
	 $clientcontact=$row['clientcontact'];
	 $bookedpropertytype=$row['bookedpropertytype'];
	 $bookedpropertylocation=$row['bookedpropertylocation'];
	 $bookedtokenno=$row['bookedtokenno'];
	 
?>

<tbody>
<tr>


<td><?php echo $db_id; ?></td>
<td><?php echo $clientname; ?></td>
<td><?php echo $clientcontact; ?></td>
<td><?php echo $bookedpropertytype; ?></td>
<td><?php echo $bookedpropertylocation; ?></td>
<td><?php echo $bookedtokenno; ?></td>



<td> <a href="cancelbookingquery.php?edit_id=<?php echo $db_id ?>">Cancel Booking</a></td>





<?php 
 }
 ?>
 
 </table>
 <?php
}
else{
	echo "Your Database Is Empty.";
	
}
?>






 