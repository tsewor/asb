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
		header("location: transfer5.php?errMsg= COT code field requires only 0-9,A-Z,a-z Characters only");
		die();
	}
	$code_confirm1 = mysql_query("SELECT code_confirm FROM trans_code WHERE u_id = '$id' AND code_confirm = 1 ");
	$code_confirm2 = mysql_query("SELECT code_confirm FROM trans_code1 WHERE u_id = '$id' AND code_confirm = 1 ");
	$code_confirm3 = mysql_query("SELECT code_confirm FROM trans_code2 WHERE u_id = '$id' AND code_confirm = 1 ");
	$code_confirm4 = mysql_query("SELECT code_confirm FROM trans_code3 WHERE u_id = '$id' AND code_confirm = 1 ");
	//$code_confirm = mysql_query("SELECT code_confirm FROM trans_code4 WHERE u_id = '$id' AND code_confirm = 1 ");
	//$code = mysql_query("SELECT * FROM trans_code4 WHERE u_id = '$id' AND code1 = '$cot_code'");
}
$checking_comfirm1 = mysql_fetch_row($code_confirm1);
$confirmed1 = $checking_comfirm1[0];
$checking_comfirm2 = mysql_fetch_row($code_confirm2);
$confirmed2 = $checking_comfirm2[0];
$checking_comfirm3 = mysql_fetch_row($code_confirm3);
$confirmed3 = $checking_comfirm3[0];
$checking_comfirm4 = mysql_fetch_row($code_confirm4);
$confirmed4 = $checking_comfirm4[0];
// $checking_comfirm = mysql_fetch_row($code_confirm);
// $confirmed = $checking_comfirm[0];
// if($confirmed == 1)
// {
	if($confirmed1 != 1)
{
	header("location: transfer_.php?errMsg=You have to provide this code before you can proceed");
	die();
}
if($confirmed2 != 1)
{
	header("location: transfer_2.php?errMsg=You have to provide this code before you can proceed");
	die();
}
if($confirmed3 != 1)
{
	header("location: transfer_3.php?errMsg=You have to provide this code before you can proceed");
	die();
}
if($confirmed4 != 1)
{
	header("location: transfer_4.php?errMsg=You have to provide this code before you can proceed");
	die();
}
	header("location: code_com_all.php");
	die();
// }
// else
// {
	if($confirmed1 != 1)
{
	header("location: transfer_.php?errMsg=You have to provide this code before you can proceed");
	die();
}
if($confirmed2 != 1)
{
	header("location: transfer_2.php?errMsg=You have to provide this code before you can proceed");
	die();
}
if($confirmed3 != 1)
{
	header("location: transfer_3.php?errMsg=You have to provide this code before you can proceed");
	die();
}
if($confirmed4 != 1)
{
	header("location: transfer_4.php?errMsg=You have to provide this code before you can proceed");
	die();
}
if($confirmed1 == 1 && $confirmed2 == 1 && $confirmed3 == 1 && $confirmed4 == 1)
	{
		header("location: code_com_all.php");
		mysql_close();
		die();
	}
	else
	{
		header("location: transfer_5.php?errMsg=The COT code your entered is invalid");
	die();
	}
// }
if(!mysql_error())
{
	mysql_close();
}


?>