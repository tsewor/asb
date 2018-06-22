<?php 
error_reporting(0);
session_start();
$email = $_SESSION['user'];
include '../connection/connect.php';
$photo_name = $_FILES['photo']['name'];
$photo_type = $_FILES['photo']['type'];
$photo_size = $_FILES['photo']['size'];
$photo_temp = $_FILES['photo']['tmp_name'];
$photo_error = $_FILES['photo']['error'];
$photo = explode('/', $photo_type);
$type_photo = $photo[0];
$photoType = $photo[1];
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
$ran_photo_name = code(40);
if(preg_match('/[\'\\/~`@#\$%\^&\*\(\)\+=\{\}\[\]\|;:"\<\>\?\\\]/', $photo_name))
{
	header("location: 1002D431F54B9A2E5BD7A8230617DD79845DE267741.php?errMsg=Please save the photo with your name and then proceed");
	die();
}
if(!isset($photo_name) || empty($photo_name) || $photo_name == '')
{
	header("location: 1002D431F54B9A2E5BD7A8230617DD79845DE267741.php?errMsg=Please, photo must be uploaded");
	die();
}
if($type_photo != 'image')
{
	header("location: 1002D431F54B9A2E5BD7A8230617DD79845DE267741.php?errMsg=The file your set for upload is not an image file");
	die();
}
else
{
	if(isset($email) && !empty($email)){
	$user = mysql_query("SELECT id FROM user_login WHERE email = '$email' LIMIT 1");
	$row = mysql_fetch_row($user);
	$u_id = $row[0];
	mysql_query("INSERT INTO user_dp VALUES('', '$u_id', '$ran_photo_name.$photoType')"); 
	copy($photo_temp, '../account_passport/'.$ran_photo_name.'.'.$photoType);
	header("location: 0617DD7981002D431F54B9A2E5BD7A825BD75BD7.php?id=$u_id");
	}
	else
	{
	mysql_close($con);
	header("location: index.php");
	die();
	}
}
if(mysql_error())
{
	mysql_close($con);
	header("location: 1002D431F54B9A2E5BD7A8230617DD79845DE267741.php?errMsg=An error has occured");
	die();
}
?>