<?php 
session_start();
error_reporting(0);
$u_id = $_POST['check'];
if(!preg_match('/[\'\\/~`\!%\^&\*\(\)\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $u_id))
		{
		$user_id = $u_id;
		}
		else
		{

		}
$id = $_SESSION['admin'];
if(!isset($id) || $id == '' || empty($id))
{
	header("location:logout.php");
	die();
}
else
{
	
}
include 'connection/connect.php';
$user 		= mysql_query("SELECT u_id FROM user_acc WHERE acc_no = '$user_id'");
$user_acc 	= mysql_fetch_row($user);
$get_acc 	= $user_acc[0];
if(isset($get_acc))
{
	header("location: user_account_details.php?user_id=$get_acc");
	die();
}
else
{
	header("location: user_account_details.php?user_id=$get_acc&&errMsg=Account does not exist");
	die();
}


?>