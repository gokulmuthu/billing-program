
<?php
session_start();
session_destroy();
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in']== false)
{
header("Location: login.php");
}

?>
<html>
<link rel="stylesheet"  type="text/css" href="style1.css">
<body>
<h1><font color = '#29293d'>Billing System.....!!!</font></h1>
<form method='post' action='login.php'>
<input type ='submit' value='logout!'><br/><br/><br/>
<a href="insert.php">insert</a><br/><br/>
<a href="update.php">update</a><br/><br/>
<a href="process.php">process</a><br/><br/>
<a href="print.php">print the statement</a><br/>
</form>
</body>
</html>


