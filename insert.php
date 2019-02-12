<html>
<head>
</head>
<link rel="stylesheet"  type="text/css" href="style3.css">
<body>
<font color='Amber'><h1>Feeding the Data</h1></font>
<form action="insert.php" method="GET">
<font color='#FFFAF0'>Product :</font>
<input name="product" type="varchar" value=''/><br><br>
<font color='#FFFAF0'>Quantity :</font>
<input type="varchar" name="quantity" value=""/><br><br>
<font color='#FFFAF0'>Prize :</font>
<input type="varchar" name="prize" value=""/><br><br>
<input type="submit" name="submit" value="submit"/>
</form>
<?php

$host = 'localhost';
$user = 'root';
$pass = ' ';
$db = 'test';
$conn = mysqli_connect($host,$user,$pass,$db);
if($conn->connect_error)
{
	die("connection failed:" . $conn->connect_error);
}
else
{
	echo " ";
}
if(isset($_GET['submit']))
{
$a=$_GET['product'];
$b=$_GET['quantity'];
$c=$_GET['prize'];
$sql = "INSERT INTO stock(product,quantity,prize)VALUES('$a','$b','$c')";
$data = mysqli_query($conn, $sql);
if(!$data)
{
	die ("could not connect:".mysqli_error($conn));
}
else
{
	echo "table inserted";
}
}
$conn->close();
?>
</body>
</html>