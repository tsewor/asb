<?Php 
include 'control.php';
$errMsg = $_GET['errMsg1'];
$user_acc = $_GET['id'];
if(preg_match('/[a-zA-z_@#\'\\/~`\!%\^&\*\(\)\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $user_acc))
		{
			header("location: view_user.php?errMsg1=Wrong Aguements was observed");
			die();
		
		}
		else
		{
			$user_id = $user_acc;
		}
	$del = mysql_query("DELETE FROM user_acc WHERE U_id = '$user_id'");
	$del = mysql_query("DELETE FROM user_data WHERE U_id = '$user_id'");
	if(!mysql_error($del))
	{
		header("location: view_user.php?errMsg1=User was deleted successfully");
		die();
		mysql_close();
	}
	else
	{
		header("location: view_user.php?errMsg1=An error occured");
		die();
		mysql_close();
	}
?>