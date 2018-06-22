<?php
session_start();
error_reporting(0);
$user_id = $_GET['user_id'];
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
$sel1 = mysql_query("SELECT * FROM user_login WHERE id = '$user_id'");
while($log = mysql_fetch_array($sel1))
{
	$id 		= $log['0'];
	$mail 		= $log['1'];
	$password	= $log['2'];
	$key 		= $log['3'];
}
$sel2 = mysql_query("SELECT * FROM user_data WHERE u_id = '$user_id'");
while($data = mysql_fetch_array($sel2))
{
	$firstname 		= strtoupper($data['2']);
	$lastname 		= strtoupper($data['3']);
	$address 		= $data['4'];
	$city 			= $data['5'];
	$state 			= $data['6'];
	$zip 			= $data['7'];
	$mobile			= $data['8'];
	$reg_date		= $data['9'];
	$full_name 		= $lastname.' '.$firstname;
}
$sel3 = mysql_query("SELECT * FROM user_acc WHERE u_id = '$user_id'");
while($account = mysql_fetch_array($sel3))
{
	$acc_id = $account['0'];
	$acc_Uid = $account['1'];
	$acc_no = $account['2'];
	$acc_bal = $account['3'];
}
$sel4 = mysql_query("SELECT * FROM user_dp WHERE u_id = '$user_id'");
while($photo = mysql_fetch_array($sel4))
{
	$dp_id 	= $photo['0'];
	$dp_Uid = $photo['1'];
	$dp = $photo['2'];
	
}
//please display picture value here temporarily take Note
//$dp = 'a value from database';
//Attention of this part please
$heading = 'Put Something Here';
$heading_info = 'Please MasterCard ending in 7406 has expired. Please update your cars\'s expiry date as soon as possible <br /> to continue using paypal' ;
// $username = 'Amatesiro Joel .A';
// $acc_balance = 1000.01;
$checkall = '';
$server_name = $_SERVER['SERVER_NAME'];
$server_file = $_SERVER['PHP_SELF'];
$page = $server_name.$server_file;

function check()
{
	global $checkall;
	$checkall = 'checked';
}
$today = date("m/d/Y");
if(mysql_error())
{
	header("location: index.php");
	die();
}
?>