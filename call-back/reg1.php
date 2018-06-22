<?php 
error_reporting(0);
session_start();
include '../connection/connect.php';
$fNum = $_GET['fnum'];
$sNum = $_GET['snum'];
$email = $_POST['email'];
$pass = $_POST['password'];
$re_pass = $_POST['re_password'];
$code_result = $_POST['code'];
$add = $fNum + $sNum;
if(isset($pass) && $pass != '' && $pass === $re_pass)
{
	$password = $pass;
}
else
{
	header("location: index.php?email=$email&errMsg=Password do not match");
	die();
}

if(preg_match("/(^[a-zA-Z0-9_.+-]+)@([a-zA-Z_-]+).([a-zA-Z]{2,4}$)/i", $email))
{
		if(!preg_match('/[\'\\/~`\!%\^&\*\(\)\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $password))
		{
	
		}
		else
		{
			header("location: index.php?email=$email&errMsg=Password requires only (0-9,A-Z,a-z,#_$) Characters only");
			die();
		}
}
else
{
	header("location: index.php?pass=$password&errMsg=Your Email is not a valid email");
}

	if($add != $code_result )
	{
			header("location:index.php?email=$email&pass=$password&errMsg=Your answer is not correct");
			die();
	}
$reg1 = $_SESSION['reg'];
if(!isset($reg1) || $reg1 != 'reg1' || !isset($fNum) || !isset($sNum))
{
	header("location: index.php");
	die();
}

function code($len)
{
$result = '';
$RanNum = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890_-!";
$NumArray = str_split($RanNum);
for($i = 0; $i < $len; $i++)
{
	$randItem = array_rand($NumArray);
	$result .= "". $NumArray[$randItem];
}
return $result;
}
$key = code(40);
$firstNumber = rand(0 , 100);
$secondNumber = rand(0 , 100);
$email_check = mysql_query("SELECT COUNT(*) FROM user_login WHERE email = '$email'");
$row = mysql_fetch_row($email_check);
if($row[0] > 0 )
{
	header("location:index.php?email=$email&pass=$password&errMsg=This already an account existing with this email");
	die();
}
else
{
	mysql_query("INSERT INTO user_login VALUES('', '$email', '$password', '$key', '' )");
}
if(!mysql_error())
{
	$_SESSION['user'] = $email;
	mysql_close($con);
	header('location: 2E5BD7A0617DD79845DE26774181002D431F54B9A23DBC12CB3E5.php');
	die();
}
else
{
	mysql_close($con);
	header("location: index.php?errMsg=An error has occured");
	die();
}

?>