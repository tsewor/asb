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
$$bank_name 		= $_SESSION['bank_name']; 
$rec 				= $_SESSION['receive_name'];
$rec_acc 			= $_SESSION['receive_acc'];
$swift 				= $_SESSION['swift'];	
$send_acc			= $_SESSION['send_acc'];
$amount				= $_SESSION['amount'];	
$trans_type			= $_SESSION['trans_type'];	
$trans_date			= $_SESSION['trans_date'];
$t_descript			= $_SESSION['t_descript'];
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
	$rec_id = mysql_query("SELECT u_id FROM user_acc WHERE acc_no = '$rec_acc'");
	$get_rec_id = mysql_fetch_row($rec_id);
	$receiver_id = $get_rec_id[0];
}
if(isset($rec_acc) && $rec_acc != '' && !empty($rec_acc))
{
		function code($len)
		{
		$result = '';
		$RanNum = "1234567890";
		$NumArray = str_split($RanNum);
			for($i = 0; $i < $len; $i++)
			{
				$randItem = array_rand($NumArray);
				$result .= "". $NumArray[$randItem];
			}
			return $result;
		}
		$key = code(10);
		$ref_number = 'TX'.$key;
	if(isset($amount) && $amount != '' && !empty($amount))
	{
		mysql_query("UPDATE user_acc SET balance = `balance`-'$amount' WHERE acc_no = '$send_acc'");
		mysql_query("UPDATE user_acc SET balance = `balance`+'$amount' WHERE acc_no = '$rec_acc'");
		mysql_query("INSERT INTO trans VALUES('', '$id', '$receiver_id', '$ref_number', '$amount', '$trans_type', '$t_descript', CURRENT_TIMESTAMP)");
		mysql_close();
		header("location: funds_transfered.php?errMsg=Your Transfer was successful");
		die();
	}
	else{
		header("location: transfer_funds.php?errMsg=Your Transfer was not successful");
		die();
	}
}
else{
		header("location: transfer_funds.php?errMsg=Your Transfer was not successful");
		die();
	}


?>