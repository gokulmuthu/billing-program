<html>
<head>
<h1><font color='Amber'>Stock In Hold ...</font></h1>
</head>
<link rel="stylesheet"  type="text/css" href="style5.css">
<body>

<table width="200" height="200" border="2" cellpadding="1" cellspacing="1">
<style>
{
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th{
background-color: #588c7e;
color:white;
}
tr:nth-child(even) { background-color: #f2f2f2}
</style>	<tr>
      <th>id</th>
	  <th>name</th>
	  <th>quantity</th>
	  <th>prize</th>  
    </tr>
	
<?php
$hostname='localhost';
$user = 'root';
$pass = '';
$conn = mysqli_connect($hostname,$user,$pass);
if(!mysqli_select_db($conn,'test'))
{
echo "DATABASE NOT SELECTED";
}
$sql="SELECT * FROM stock";
$abc =mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($abc))
{
	echo "<tr>";
	echo "<td>".$row['id']. "</td>";
	echo "<td>".$row['product']. "</td>";
	echo "<td>".$row['quantity']. "</td>";
	echo "<td>".$row['prize']. "</td>";
	echo "</tr>";
}
$conn->close();
?>
</table>
</body>
</html>