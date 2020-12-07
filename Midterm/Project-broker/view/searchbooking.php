<?php

$Propertybookingerror = "";
$PropertyItemserror = "";



$bookingno=$PropertyItem="";


?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<center>
<h1>Search Booking</h1>

<form action="../controller/action_SearchProperty.php" method="POST">

  <label for="bookingno">Booking No:</label><?php echo $Propertybookingerror ; ?>
  <input type="text" id="PropertyLocation" name="bookingno" value=""><br>
  
  <label for="PropertyItems">Choose Which Type Of Property</label><?php echo $PropertyItemserror ; ?>

<select name="PropertyItems" id="PropertyItems">
  <option value="Flat">Flat</option>
  <option value="Land">Land</option>
  
  
  
</select><br>

<input type="submit" value="search">
  <input type="reset" value="reset">
  <br><br>

<table>
  <tr>
    <th>Booking No</th>
    <th>Property Items</th>
    <th>Contact</th>
  </tr>
  <tr>
    <td> </td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td><td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>

</table>
</center>
</body>
</html>