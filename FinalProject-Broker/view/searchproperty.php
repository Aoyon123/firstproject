<!DOCTYPE html>
<html>
<head>
<title>Searchproperty</title>
<link rel="stylesheet" type="text/css" href="">
</head>
<body>
<?php
$connection =mysqli_connect('localhost','root','','final6');
 if(!$connection)
  {
	  die("Not Connected.".mysqli_error($connection));
  }
 $output='';
if(isset($_POST['search']))
{
$searchq=$_POST['search'];
$searchq=preg_replace("#[^0-9a-z]#i","",$searchq);

$query=mysqli_query("SELECT * FROM addproperty2 WHERE propertytype LIKE '%$searchq%' OR propertylocation LIKE '%$searchq%'")or die("could not search!");


$count=mysqli_num_rows($query);
if($count==0)
{
$output='There Was No Search Result!';
}
else
{
while($row=mysqli_fetch_array($query))
{
$propertylo=$row['propertylocation'];
$propertyty=$row['propertytype'];
$id=$row['addproperty_id'];
$output .='<div>'.$propertylo.' '.$propertyty.'</div>';
}
}
}	

?>

<form action="searchproperty.php" method="post">
    <input type="text" name="search" placeholder="Searching For Location..."/>
	<input type="submit"  value="Search"/>
</form>

<?php 
echo("$output");
?>

</body>
</html>