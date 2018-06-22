<?php
$error1 = $_GET['errMsg1'];
$error2 = $_GET['errMsg2'];
if(isset($error1) && $error1 != '')
{
	header("location: user_account_statement.php?errMsg=$error1");
	die();
}
else
{
	header("location: user_account_statement.php?errMsg=$error2");
	die();
}

?>