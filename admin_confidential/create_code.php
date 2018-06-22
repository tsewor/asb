<?php
session_start();
error_reporting(0);
include 'connection/connect.php';
$id = $_SESSION['admin'];
if(!isset($id) || $id == '' || empty($id))
{
	header("location:logout.php");
	die();
}
else
{
$user_acc = $_POST['user_acc'];
$code  = $_POST['code'];
$trans_type = $_POST['trans_code_type'];
if(!preg_match('/[a-zA-z_@#\'\\/~`\!%\^&\*\(\)\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $user_acc))
		{
		$rec_acc = $user_acc;
		}
		else
		{
			header("location: transfer_code.php?errMsg=Only Numeric Characters are required for Account Number");
			die();
		}
	if(!preg_match('/[_@#\'\\/~`\!%\^&\*\(\)=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $code))
		{
		$user_code = $code;
		}
		else
		{
			header("location: transfer_code.php?errMsg=Only Numeric and Alphetic Characters are required for Transfer Code");
			die();
		}
}
$check_user = mysql_query("SELECT u_id FROM user_acc WHERE acc_no = '$rec_acc'");
$user_account = mysql_fetch_row($check_user);
$user_id = $user_account[0];
if($trans_type == 1)
{
	mysql_query("INSERT INTO trans_code VALUES('', '$user_id', '$user_code', '0') ");
	header("location: transfer_code.php?errMsg=Code was successfully updated");
	die();
}
else if($trans_type == 2)
{
	mysql_query("INSERT INTO trans_code1 VALUES('', '$user_id', '$user_code', '0') ");
	header("location: transfer_code.php?errMsg=Code was successfully updated");
	die();
}
else if($trans_type == 3)
{
	mysql_query("INSERT INTO trans_code2 VALUES('', '$user_id', '$user_code', '0') ");
	header("location: transfer_code.php?errMsg=Code was successfully updated");
	die();
}
else if($trans_type == 4)
{
	mysql_query("INSERT INTO trans_code3 VALUES('', '$user_id', '$user_code', '0') ");
	header("location: transfer_code.php?errMsg=Code was successfully updated");
	die();
}
else if($trans_type == 5)
{
	mysql_query("INSERT INTO trans_code4 VALUES('', '$user_id', '$user_code', '0') ");
	header("location: transfer_code.php?errMsg=Code was successfully updated");
	die();
}
else
{
	header("location: transfer_code.php?errMsg=An error occured");
	die();
}
if(mysql_error())
{
	header("location: transfer_code.php?errMsg=An error occured");
	mysql_close();
	die();
}

?>