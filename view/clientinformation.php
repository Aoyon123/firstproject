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
  padding: 2px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Client Information</h2>

<table>
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email Address</th>
	<th>Phone Number</th>
	<th>Gender</th>
	
</tr>
  <tr>
    <td>g</td>
	<td>h</td>
	<td>g</td>
	<td>g</td>
	<td>g</td>


  </tr>

  <tr>
    <td>g</td>
	<td>h</td>
	<td>g</td>
	<td>g</td>
	<td>g</td>


  </tr>

   <tr>
    <td>g</td>
	<td>h</td>
	<td>g</td>
	<td>g</td>
	<td>g</td>


  </tr>

</table>
<br>
<br>

  <form action="myworks.php" method="post">
  <input style="color:green" type="submit" value="Back" name="">
  </form> 
  <br>
  <br>
<form action="../controller/action_logout.php" method="post">
  <input style="color:green" type="submit" value="Log Out" name="">
  </form>
</body>
</html>