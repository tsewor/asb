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
	$bank_title 	= $_POST['bank_name'];
	$rec			= $_POST['receiver_name'];
	$reciver_acc 	= $_POST['receiver_acc'];
	$swift			= $_POST['swift'];
	$sender_acc		= $_POST['sender_acc'];
	$amount 		= $_POST['amount'];
	$trans_type 	= $_POST['trans_type'];
	$trans_date 	= $_POST['trans_date'];
	$t_descript 	= $_POST['t_descript'];

	$_SESSION['bank_name']     		= $bank_title;
	$_SESSION['receive_name']		= $rec;
	$_SESSION['receive_acc']		= $reciver_acc;
	$_SESSION['swift']				= $swift;
	$_SESSION['amount']				= $amount;
	$_SESSION['trans_type']			= $trans_type;
	$_SESSION['trans_date']			= $trans_date;
	$_SESSION['t_descript']			= $t_descript;	
	

$check_receiver = mysql_query("SELECT acc_no FROM user_acc WHERE acc_no = '$reciver_acc'");
$receiver = mysql_fetch_row($check_receiver);
$rec_acc = $receiver[0];

$check_sender = mysql_query("SELECT acc_no FROM user_acc WHERE u_id = '$id'");
$sender = mysql_fetch_row($check_sender);
$send_acc = $sender[0];
$_SESSION['send_acc']			= $send_acc;

	if(!isset($rec_acc) || $rec_acc == '' || empty($rec_acc))
	{
		header("location: transfer_funds.php?rec_title=$bank_title&rec=$rec&rec_acc=$reciver_acc&swift=$swift&amount=$amount&desc=$t_descript&errMsg=Please Provide valid Receiver's Account Number");
	die();
	}
}

if(!isset($bank_title) || $bank_title == '' || empty($bank_title))
{
	header("location: transfer_funds.php?rec=$rec&rec_acc=$reciver_acc&swift=$swift&amount=$amount&desc=$t_descript&errMsg=Please Provide Receiver's Bank name");
	die();
}
else
{
	if(preg_match('/[\'\\/~`\!@#\$%\^&\*\(\)\\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $bank_title))
	{
		header("location: transfer_funds.php?rec=$rec&rec_acc=$reciver_acc&swift=$swift&amount=$amount&desc=$t_descript&errMsg= Receiver's Bank Title field requires only 0-9,A-Z,a-z Characters only");
		die();
	}
}

if(!isset($rec) || $rec == '' || empty($rec))
{
	header("location: transfer_funds.php?rec_title=$bank_title&rec=$rec&rec_acc=$reciver_acc&swift=$swift&amount=$amount&desc=$t_descript&errMsg=Please Provide Receiver's name");
	die();
}
else
{
	if(preg_match('/[\'\\/~`\!@#\$%\^&\*\(\)\\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $rec))
	{
		header("location: transfer_funds.php?rec_title=$bank_title&rec_acc=$reciver_acc&swift=$swift&amount=$amount&desc=$t_descript&errMsg= Receiver's Name field requires only 0-9,A-Z,a-z Characters only");
		die();
	}
}
if(!isset($reciver_acc) || $reciver_acc == '' || empty($reciver_acc))
{
	header("location: transfer_funds.php?rec_title=$bank_title&rec=$rec&rec_acc=$reciver_acc&swift=$swift&amount=$amount&desc=$t_descript&errMsg=Please Provide Receiver's Account Number");
	die();
}
else
{
	if(preg_match('/[a-zA-Z\'\\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $reciver_acc))
	{
		header("location: transfer_funds.php?rec_title=$bank_title&rec=$rec&swift=$swift&amount=$amount&desc=$t_descript&errMsg= Receiver's Account Number field requires only numeric Characters only");
		die();
	}
}

if(!isset($swift) || $swift == '' || empty($swift))
{
	header("location: transfer_funds.php?rec_title=$bank_title&rec=$rec&rec_acc=$reciver_acc&swift=$swift&amount=$amount&desc=$t_descript&errMsg=Please Provide Bank Swift code");
	die();
}
else
{
	if(preg_match('/[\'\\/~`\!@#\$%\^&\*\(\)\\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $swift))
	{
		header("location: transfer_funds.php?rec_title=$bank_title&rec=$rec&rec_acc=$reciver_acc&amount=$amount&desc=$t_descript&errMsg=SWIFT/ABA Routing Code field requires only 0-9,A-Z,a-z Characters only");
		die();
	}
}
if(!isset($amount) || $amount == '' || empty($amount))
{
	header("location: transfer_funds.php?rec_title=$bank_title&rec=$rec&rec_acc=$reciver_acc&swift=$swift&amount=$amount&desc=$t_descript&errMsg=Please Provide Amount to tranfer");
	die();
}
else
{
	if(preg_match('/[a-zA-Z\'\\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $amount))
	{
		header("location: transfer_funds.php?rec_title=$bank_title&rec=$rec&rec_acc=$reciver_acc&swift=$swift&desc=$t_descript&errMsg= Amount to Transfer field requires only numeric Characters only");
		die();
	}
}
if(!isset($t_descript) || $t_descript == '' || empty($t_descript))
{
	header("location: transfer_funds.php?rec_title=$bank_title&rec=$rec&rec_acc=$reciver_acc&swift=$swift&amount=$amount&desc=$t_descript&errMsg=Please Provide Transfer Description");
	die();
}
else
{
	if(preg_match('/[\\/~`\!@#\$%\^&\*\(\)\\+=\{\}\[\]\|:"\<\>\?\\\]/', $t_descript))
	{
		header("location: transfer_funds.php?rec_title=$bank_title&rec=$rec&rec_acc=$reciver_acc&swift=$swift&amount=$amount&errMsg=Transfer Description field requires only 0-9,A-Z,a-z Characters only");
		die();
	}
}

$bal = mysql_query("SELECT balance FROM user_acc WHERE u_id = '$id'");
while($check = mysql_fetch_array($bal))
{
	$acc_bal = $check[0];
	
}
$check_bal = $acc_bal - $amount;
if($check_bal < 0)
{
	header("location: transfer_funds.php?errMsg=There is no enough funds to carry out this process");
	die();
}
else
{
	mysql_close();
	header("location: transfer.php");
	die();
}

?>