<?php
session_start();
$username = 'admin';
$password = 'pass';
if (isset($_SESSION['logged_in'])&& $_SESSION['logged_in']== true)
{
	header("Location: sucess.php");
}

if (isset($_POST['username'])&& isset($_POST['password']))
{
	if($_POST['username'] == $username && $_POST['password'] == $password)
	{
		$_SESSION['logged_in'] = true;
				header("Location: sucess.php");
	}

}
?>
<html>
<head>
<title>Login Form</title>
</head>
<link rel="stylesheet"  type="text/css" href="style.css">
<body>
<div id="frm">
<h1><font color='white'>BILLING SYSTEM:</font></h1>
<form method='post' action='login.php'>
<font color='#FFFAF0'>user name:</font><br/>
<input type ='text' name='username'><br/>
<font color='#FFFAF0'>password:</font><br/>
<input type ='password' name='password'><br/>
<input type ='submit' id='btn' value='login!'>
	</form>
	</div>
	</body>
</html>