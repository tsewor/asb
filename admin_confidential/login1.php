<?php
include 'connection/connect.php';
$id = $_POST['username'];
$pwd = $_POST['password'];
if(preg_match('/[\'\\/~`\!%\^&\*\(\)\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $id))
{
	header("location: index.php?acc_no=$id&errMsg=Account No. must contain only numbers ");
	die();
}
else
{
	$username = $id;
	if(!preg_match('/[\'\\/~`\!%\^&\*\(\)\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $pwd))
		{
		$password = $pwd;
		}
		else
		{
			header("location: index.php?errMsg=Password requires only (0-9,A-Z,a-z,#_$) Characters only");
			die();
		}
}
$account = mysql_query("SELECT * FROM `admin` WHERE username = '$username' AND password = '$password'");
while($sel = mysql_fetch_array($account))
{
	$user = $sel[1];
	$pass = $sel[2];
}
if($id == $user & $pwd == $pass)
	{
		session_start();
		$_SESSION['admin'] = $username;
		header("location:home.php");
		mysql_close($con);
		die();
	}
	else
	{
		header("location:index.php?errMsg=Username or Password is not Correct");
		die();
	}

?>