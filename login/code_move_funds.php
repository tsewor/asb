<?php
session_start();
error_reporting(0);
include '../connection/connect.php';
$id = $_SESSION['id'];
$trans_type = 'move';
if(!isset($id) || $id == '' || empty($id))
{
	header("location:logout.php");
	die();
}
else
{
$amount				= $_SESSION['amount'];	
	$bal = mysql_query("SELECT balance FROM user_acc WHERE u_id = '$id'");
	while($check = mysql_fetch_array($bal))
	{
		$acc_bal = $check[0];
		
	}
$check_bal = $acc_bal - $amount;
	if($check_bal < 0)
	{
		header("location: home.php?errMsg=There is no enough funds to carry out this process");
		die();
	}
	
}
if(isset($id) && $id != '' && !empty($id))
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
		mysql_query("UPDATE user_acc SET balance = `balance`-'$amount' WHERE u_id = '$id'");
		mysql_query("INSERT INTO trans VALUES('', '$id', '$id', '$ref_number', '$amount', '$trans_type', '', CURRENT_TIMESTAMP)");
		mysql_close();
		header("location: funds_moved.php?errMsg=Your Transfer was successful");
		die();
	}
	else{
		header("location: home.php?errMsg=Your Transfer was not successful");
		die();
	}
}
else{
		header("location: home.php?errMsg=Your Transfer was not successful");
		die();
	}


?>