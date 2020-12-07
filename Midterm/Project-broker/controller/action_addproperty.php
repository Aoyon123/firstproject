<?php
$property1=$property2=$property3=$property4="";

if(isset($_POST['formAddItems']))
{
	if(empty($_POST['propertyname']))
	{
		$propertyNameError="Enter Property Name That You Want To Rent";
	}
	else{
		$property1=$_POST['propertyname'];
	}
	
	
	if(empty($_POST['propertytype']))
	{
		$propertycatError="Enter Which Type Of Property";
	}
	else{
		$property2=$_POST['propertytype'];
	}
	
	if(empty($_POST['propertyquantity']))
	{
		$propertyquantityError="Enter How Many Property ";
	}
	else{
		$property3=$_POST['propertyquantity'];
	}
	if(empty($_POST['propertyprice']))
	{
		$propertypriceError="Must Enter Property Price";
	}
	else{
		$property4=$_POST['propertyprice'];
	}
	$myfile= fopen("../data/item.txt","a") or die("Unable to open the file");
	fwrite($myfile,$property1);
	
	fwrite($myfile,$property2);
	
	fwrite($myfile,$property3);
	fwrite($myfile,$property4);
	fclose($myfile);
}
?>

<!DOCTYPE html>
<html>
<title>Items</title>
<body>
<?php
 include('../view/header.php'); 
 ?>
<h1>Add items</h1>
<form action="../controller/action_additems.php" method="POST" >
	<label for="pname" >Items Name</label>
	<input type="text" name="pname" id="pname" placeholder="Enter Item Name" >
	<span class="error" ><?php if(isset($itemNameErr)){echo $itemNameErr;} ?></span>
	<br>
	<br>
	
	<label for="pcat" >Cetagory</label>
	<select name="pcat" id="pcat" >
		<option selected disabled>Which One</option>
		<option value="salads" >Flat</option>
		<option value="desserts" >Land</option>
	
	</select><span class="error" >
	<?php if(isset($itemCatErr)){echo $itemCatErr;} ?></span>
	<br>
	<br>
	
	<label for="pQty" >Quantity: </label>
	<input type="number" name="pQty" id="pQty" min="1" max="100"  >
	<span class="error" ><?php if(isset($itemQtyErr)){echo $itemQtyErr;} ?></span>
	<br>
	<br>
	<label for="pprice" >Price</label>
	<input type="text" name="pprice" id="pprice" placeholder="Enter Price" >
	<span class="error" ><?php if(isset($itemPriceErr)){echo $itemPriceErr;} ?></span>
	<br>
	<br>
 <input type="Submit" name="formAddItems" value="Add Property" >
 <input type="reset" >
 </body>
 </html>