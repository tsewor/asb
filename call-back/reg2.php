<?php 
error_reporting(0);
session_start();
$email = $_SESSION['user'];
include '../connection/connect.php';
$firstNumber = rand(0 , 100);
$secondNumber = rand(0 , 100);
$fNum = $_GET['fnum'];
$sNum = $_GET['snum'];
$add = $fNum + $sNum;
$code_result = $_POST['code'];
$firstname 	= $_POST['firstname'];
$lastname 	= $_POST['lastname'];
$address 	= $_POST['address'];
$city		= $_POST['city'];
$state		= $_POST['state'];
$zip		= $_POST['zip'];
$mobile 	= $_POST['mobile'];
$agree 		= $_POST['agree'];
if(preg_match('/[\'\\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $firstname))
{
	header("location: 2E5BD7A0617DD79845DE26774181002D431F54B9A23DBC12CB3E5.php?last=$lastname&add=$address&city=$city&state=$state&zip=$zip&mob=$mobile&errMsg= Firstname field requires only 0-9,A-Z,a-z Characters only");
	die();
}
else
{
	if(!isset($firstname) || empty($firstname))
	{
		header("location: 2E5BD7A0617DD79845DE26774181002D431F54B9A23DBC12CB3E5.php?last=$lastname&add=$address&city=$city&state=$state&zip=$zip&mob=$mobile&errMsg= Firstname field must not be left Empty");
	die();
	}
}
if(preg_match('/[\'\\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $lastname))
{
	header("location: 2E5BD7A0617DD79845DE26774181002D431F54B9A23DBC12CB3E5.php?first=$firstname&add=$address&city=$city&state=$state&zip=$zip&mob=$mobile&errMsg= Lastname field requires only 0-9,A-Z,a-z Characters only");
	die();
}
else
{
	if(!isset($lastname) || empty($lastname))
	{
		header("location: 2E5BD7A0617DD79845DE26774181002D431F54B9A23DBC12CB3E5.php?first=$firstname&add=$address&city=$city&state=$state&zip=$zip&mob=$mobile&errMsg= Lastname field must not be left Empty");
	die();
	}
}
if(preg_match('/[\'\\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>\.\?\\\]/', $address))
{
	header("location: 2E5BD7A0617DD79845DE26774181002D431F54B9A23DBC12CB3E5.php?first=$firstname&last=$lastname&city=$city&state=$state&zip=$zip&mob=$mobile&errMsg= Address field requires only 0-9,A-Z,a-z Characters only");
	die();
}
else
{
	if(!isset($address) || empty($address))
	{
		header("location: 2E5BD7A0617DD79845DE26774181002D431F54B9A23DBC12CB3E5.php?first=$firstname&last=$lastname&city=$city&state=$state&zip=$zip&mob=$mobile&errMsg= Address field must not be left Empty");
	die();
	}
}
if(preg_match('/[\'\\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $city))
{
	header("location: 2E5BD7A0617DD79845DE26774181002D431F54B9A23DBC12CB3E5.php?first=$firstname&last=$lastname&add=$address&state=$state&zip=$zip&mob=$mobile&errMsg= City field requires only 0-9,A-Z,a-z Characters only");
	die();
}
else
{
	if(!isset($city) || empty($city))
	{
		header("location: 2E5BD7A0617DD79845DE26774181002D431F54B9A23DBC12CB3E5.php?first=$firstname&last=$lastname&add=$address&state=$state&zip=$zip&mob=$mobile&errMsg= City field must not be left Empty");
	die();
	}
}
if(preg_match('/[\'\\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $state))
{
	header("location: 2E5BD7A0617DD79845DE26774181002D431F54B9A23DBC12CB3E5.php?first=$firstname&last=$lastname&add=$address&city=$city&zip=$zip&mob=$mobile&errMsg= State field requires only 0-9,A-Z,a-z Characters only");
	die();
}
else
{
	if(!isset($state) || empty($state))
	{
		header("location: 2E5BD7A0617DD79845DE26774181002D431F54B9A23DBC12CB3E5.php?first=$firstname&last=$lastname&add=$address&city=$city&zip=$zip&mob=$mobile&errMsg= State field must not be left Empty");
	die();
	}
}
if(preg_match('/[a-zA-Z\'\\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $zip))
{
	header("location: 2E5BD7A0617DD79845DE26774181002D431F54B9A23DBC12CB3E5.php?first=$firstname&last=$lastname&add=$address&city=$city&state=$state&mob=$mobile&errMsg= Zip Code field requires only numeric Characters only");
	die();
}
else
{
	if(!isset($zip) || empty($zip))
	{
		header("location: 2E5BD7A0617DD79845DE26774181002D431F54B9A23DBC12CB3E5.php?first=$firstname&last=$lastname&add=$address&city=$city&state=$state&mob=$mobile&errMsg= Zip Code field must not be left Empty");
	die();
	}
}
if(preg_match('/[a-zA-Z\'\\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $mobile))
{
	header("location: 2E5BD7A0617DD79845DE26774181002D431F54B9A23DBC12CB3E5.php?first=$firstname&last=$lastname&add=$address&city=$city&state=$state&zip=$zip&errMsg= Number field requires only numeric Characters only");
	die();
}
else
{
	if(!isset($mobile) || empty($mobile))
	{
		header("location: 2E5BD7A0617DD79845DE26774181002D431F54B9A23DBC12CB3E5.php?first=$firstname&last=$lastname&add=$address&city=$city&state=$state&zip=$zip&errMsg= Mobile field must not be left Empty");
	die();
	}
}
if(isset($agree) && $agree == 1)
{

}
else
{
	header("location: 2E5BD7A0617DD79845DE26774181002D431F54B9A23DBC12CB3E5.php?errMsg= You must accept User's Aggrements before you can proceed ");
	die();
}
if($add != $code_result )
{
	header("location:2E5BD7A0617DD79845DE26774181002D431F54B9A23DBC12CB3E5.php?first=$firstname&last=$lastname&add=$address&city=$city&state=$state&zip=$zip&mob=$mobile&errMsg= Answer is not correct ");
	die();
}
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
if(isset($email) && !empty($email))
{
	$user = mysql_query("SELECT id FROM user_login WHERE email = '$email' LIMIT 1");
	$row = mysql_fetch_row($user);
	$u_id = $row[0];
	mysql_query("INSERT INTO user_data VALUES ('', '$u_id', '$firstname', '$lastname', '$address', '$city', '$state', '$zip', '$mobile', CURRENT_TIMESTAMP )");
	mysql_query("INSERT INTO user_acc VALUES ('', '$u_id', '$key', 0 )");

}
else
{
	mysql_close($con);
	header("location: index.php");
	die();
}
if(mysql_error())
{
	//header("location: 2E5BD7A0617DD79845DE26774181002D431F54B9A23DBC12CB3E5.php?errMsg=An error has occured");
	echo mysql_error();
	die();
}
else
{
	mysql_close($con);
	header("location: 1002D431F54B9A2E5BD7A8230617DD79845DE267741.php");
	die();
}
?>