<html>
<head>
<h1><font color='Amber'>Upadate Data ...</font></h1>
</head>
<link rel="stylesheet"  type="text/css" href="style4.css">
<body>
<form action="update.php" method="GET">
<font color='#FFFAF0'>Id :</font>
<input type="int" name="id" value=""/><br><br>
<font color='#FFFAF0'>Product :</font>
<select name="product" type="varchar">
<option>----product----</option>
<option value="sugar">sugar</option>
<option value="rice">rice</option>
<option value="salt">salt</option>
<option value="wheat">wheat</option>
<option value="tomato">tomato</option>
</select><br><br>
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
	echo "<br>";
}
echo $id= $_GET['id'];
$sql = "SELECT * FROM stock WHERE id='$id' ";
$data = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($data))
{	
$a = $row['quantity'];
}
if(isset($_GET['submit']))
{
$b=$_GET['product'];
$c=$_GET['quantity'];
$d=$_GET['prize'];
$e=$c+$a;
$sql = "UPDATE stock SET product='$b', quantity='$e',prize='$d' WHERE id='$id'";
$data = mysqli_query($conn, $sql);
if(!$data)
{
	die ("could not connect:".mysqli_error($conn));
}
else
{
	echo "table updated";

}
}
$conn->close();
?>
</body>
</html>