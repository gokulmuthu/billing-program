<html>
<head>
<h1><font color='red'>Billing....</font></h1>
</head>
<link rel="stylesheet"  type="text/css" href="style2.css">
<body>
<form action="process.php" method="GET">
<font color='#FFFAF0'>Sugar :</font>
<input type="varchar" name="sugar" value=""/><br><br>
<font color='#FFFAF0'>Rice :</font>
<input name="rice" type="varchar" value=""/><br><br>
<font color='#FFFAF0'>Salt :</font>
<input type="varchar" name="salt" value=""/><br><br>
<font color='#FFFAF0'>Wheat :</font>
<input type="varchar" name="wheat" value=""/><br><br>
<font color='#FFFAF0'>Tomato :</font>
<input type="varchar" name="tomato" value=""/><br><br>
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
$a=$_GET['sugar'];
$b=$_GET['rice'];
$c=$_GET['salt'];
$d=$_GET['wheat'];
$e=$_GET['tomato'];
$sql = "SELECT * FROM stock WHERE id='1' ";
$data = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($data))
{	
$sugar = $row['prize'];
$sugara = $row['quantity'];
$s1 = $sugara - $a;
$sql = "UPDATE stock SET  quantity='$s1' WHERE id='1'";
$data = mysqli_query($conn, $sql);
}
$sql = "SELECT * FROM stock WHERE id='2' ";
$data = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($data))
{	
$rice = $row['prize'];
$ricea = $row['quantity'];
$r1 = $ricea - $b;
$sql = "UPDATE stock SET  quantity='$r1' WHERE id='2'";
$data = mysqli_query($conn, $sql);
}
$sql = "SELECT * FROM stock WHERE id='3' ";
$data = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($data))
{	
$salt = $row['prize'];
$salta = $row['quantity'];
$sa1 = $salta - $c;
$sql = "UPDATE stock SET  quantity='$sa1' WHERE id='3'";
$data = mysqli_query($conn, $sql);
}
$sql = "SELECT * FROM stock WHERE id='4' ";
$data = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($data))
{	
$wheat = $row['prize'];
$wheata = $row['quantity'];
$w1 = $wheata - $d;
$sql = "UPDATE stock SET  quantity='$w1' WHERE id='4'";
$data = mysqli_query($conn, $sql);
}
$sql = "SELECT * FROM stock WHERE id='5' ";
$data = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($data))
{	
$tomato = $row['prize'];
$tomatoa = $row['quantity'];
$t1 = $tomatoa - $e;
$sql = "UPDATE stock SET  quantity='$t1' WHERE id='5'";
$data = mysqli_query($conn, $sql);
}
$s=$a*$sugar;
$r=$b*$rice;
$sa=$c*$salt;
$w=$d*$wheat;
$t=$e*$tomato;
$add=$s+$r+$sa+$w+$t;
 echo "<font color='#FFFAF0'>Total Bill Amount : $add</font>";
}
$conn->close();
?>
</body>
</html>