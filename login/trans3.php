<?php
session_start();
error_reporting(0);
include '../connection/connect.php';
$id = $_SESSION['id'];
if(!isset($id) || $id == '' || empty($id))
{
	header("location:logout.php");
	die();
}
else
{
	$cot_code = $_POST['COT'];
	if(preg_match('/[\'\\/~`\!@#\$%\^&\*\(\)\\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $cot_code))
	{
		header("location: transfer_3.php?errMsg= COT code field requires only 0-9,A-Z,a-z Characters only");
		die();
	}
	$code_confirm = mysql_query("SELECT code_confirm FROM trans_code2 WHERE u_id = '$id' AND code_confirm = 1 ");
	$code = mysql_query("SELECT * FROM trans_code2 WHERE u_id = '$id' AND code1 = '$cot_code'");
}
	$checking_exist_code = mysql_fetch_row($code);
	$code_exist = $checking_exist_code[0];
	if(isset($code_exist) && $code_exist != '' && !empty($code_exist))
	{
		mysql_query("UPDATE trans_code2 SET code_confirm = 1 WHERE u_id = '$id' AND code1 = '$cot_code' ");
		header("location: transfer4.php");
		mysql_close();
		die();
	}
	else
	{
		header("location: transfer_3.php?errMsg=The COT code your entered is invalid");
	die();
	}
if(!mysql_error())
{
	mysql_close();
}


?>