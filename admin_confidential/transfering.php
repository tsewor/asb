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
$recevier_acc = $_POST['receiver_acc'];
$amount  = $_POST['amount'];
$trans_type = $_POST['trans_type'];
$trans_date = $_POST['trans_date'];
if(!preg_match('/[a-zA-z_@#\'\\/~`\!%\^&\*\(\)\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $recevier_acc))
		{
		$rec_acc = $recevier_acc;
		}
		else
		{
			header("location: transfer_funds.php?errMsg=Only Numeric Characters are required");
			die();
		}
	if(!preg_match('/[a-zA-z_@#\'\\/~`\!%\^&\*\(\)=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $amount))
		{
		$rec_acc = $recevier_acc;
		}
		else
		{
			header("location: transfer_funds.php?errMsg=Only Numeric Characters are required");
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
		mysql_query("UPDATE user_acc SET balance = `balance`+'$amount' WHERE acc_no = '$rec_acc'");
		mysql_query("INSERT INTO trans VALUES('', '$trans_type', '$receiver_id', '$ref_number', '$amount', '', '', '$trans_date')");
		mysql_close();
		header("location: transfer_funds.php?errMsg=Your Transfer was successful");
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