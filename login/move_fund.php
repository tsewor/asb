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
		header("location: moving_funds.php?errMsg= COT code field requires only 0-9,A-Z,a-z Characters only");
		die();
	}
	// $code_confirm1 = mysql_query("SELECT code_confirm FROM trans_code WHERE u_id = '$id' AND code_confirm = 1 ");
	// $code_confirm2 = mysql_query("SELECT code_confirm FROM trans_code1 WHERE u_id = '$id' AND code_confirm = 1 ");
	// $code_confirm3 = mysql_query("SELECT code_confirm FROM trans_code2 WHERE u_id = '$id' AND code_confirm = 1 ");
	// $code_confirm4 = mysql_query("SELECT code_confirm FROM trans_code3 WHERE u_id = '$id' AND code_confirm = 1 ");
	// $code_confirm = mysql_query("SELECT code_confirm FROM trans_code4 WHERE u_id = '$id' AND code_confirm = 1 ");
	$code = mysql_query("SELECT * FROM trans_code4 WHERE u_id = '$id' AND code1 = '$cot_code'");
}
// $checking_comfirm1 = mysql_fetch_row($code_confirm1);
// $confirmed1 = $checking_comfirm1[0];
// $checking_comfirm2 = mysql_fetch_row($code_confirm2);
// $confirmed2 = $checking_comfirm2[0];
// $checking_comfirm3 = mysql_fetch_row($code_confirm3);
// $confirmed3 = $checking_comfirm3[0];
// $checking_comfirm4 = mysql_fetch_row($code_confirm4);
// $confirmed4 = $checking_comfirm4[0];
// $checking_comfirm = mysql_fetch_row($code_confirm);
// $confirmed = $checking_comfirm[0];
// if($confirmed == 1)
// {
// 	if($confirmed1 != 1)
// {
// 	header("location: home.php?errMsg=You have provide wrong First Code");
// 	die();
// }
// if($confirmed2 != 1)
// {
// 	header("location: home.php?errMsg=You have provide wrong Second code");
// 	die();
// }
// if($confirmed3 != 1)
// {
// 	header("location: home.php?errMsg=You have provide wrong Third code");
// 	die();
// }
// if($confirmed4 != 1)
// {
// 	header("location: home.php?errMsg=You have provide wrong Fourth code");
// 	die();
// }
// 	header("location: code_com_all.php");
// 	die();
// }
// else
// {
// 	if($confirmed1 != 1)
// {
// 	header("location: home.php?errMsg=You have provide wrong code1");
// 	die();
// }
// if($confirmed2 != 1)
// {
// 	header("location: home.php?errMsg=You have provide wrong code2");
// 	die();
// }
// if($confirmed3 != 1)
// {
// 	header("location: home.php?errMsg=You have provide wrong code3");
// 	die();
// }
// if($confirmed4 != 1)
// {
// 	header("location: home.php?errMsg=You have provide wrong code4");
// 	die();
// }
	$checking_exist_code = mysql_fetch_row($code);
	$code_exist = $checking_exist_code[2];
	if(isset($code_exist) && $code_exist != '' && !empty($code_exist) && $code_exist == $cot_code)
	{
		mysql_query("UPDATE trans_code4 SET code_confirm = 1 WHERE u_id = '$id' AND code1 = '$cot_code' ");
		header("location: moving_com.php");
		mysql_close();
		die();
	}
	else
	{
		header("location: moving_funds.php?errMsg=You have provided an invalid code");
	die();
	}

if(!mysql_error())
{
	mysql_close();
}


?>