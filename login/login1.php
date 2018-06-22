<?php
include '../connection/connect.php';
$id = $_POST['username'];
$pwd = $_POST['password'];

if(preg_match('/[a-zA-Z_\'\\/~`\!%\^&\*\(\)\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $id))
{
	header("location: index.php?acc_no=$id&errMsg=Account No. must contain only numbers ");
	die();
}
else
{
	$acc_no = $id;
	if(!preg_match('/[\'\\/~`\!%\^&\*\(\)\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $pwd))
		{
	
		}
		else
		{
			header("location: register1.php?errMsg=Password requires only (0-9,A-Z,a-z,#_$) Characters only");
			die();
		}
}
$account = mysql_query("SELECT u_id FROM user_acc where acc_no = '$acc_no'");

while($sel = mysql_fetch_array($account))
{
	$u_id = $sel[0];
}
	if(!isset($u_id) || $u_id == '' || empty($u_id))
	{
		header("location:login.php?acc_no=$id&errMsg=Account No is not Correct");
		die();
	}
	else
	{
		$pass = mysql_query("SELECT password FROM user_login where id = '$u_id'");
		while($get_pass = mysql_fetch_array($pass))
		{
			$password = $get_pass[0];
		}
	}
	if($password != $pwd || empty($pwd) || $pwd == '')
	{
		header("location:login.php?acc_no=$id&errMsg=Password is not Correct");
		die();
	}
	else
	{
		session_start();
		$_SESSION['id'] = $u_id;
		header("location:home.php");
		mysql_close($con);
		die();
	}

?>