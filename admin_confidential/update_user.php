<?Php 
include 'control.php';
$errMsg = $_GET['errMsg1'];
//$user_acc = $_GET['id'];
$email		= $_POST['email'];
$password	= $_POST['password'];
$firstname	= $_POST['firstname'];
$lastname	= $_POST['lastname'];
$phone		= $_POST['phone'];
$address	= $_POST['address'];
$city		= $_POST['city'];
$state		= $_POST['state'];
$zip		= $_POST['zip'];
$reg_date	= $_POST['reg_date'];
// echo $email;
// echo $password;
// echo $firstname;
// echo $lastname;
// die();
if(preg_match('/[a-zA-z_@#\'\\/~`\!%\^&\*\(\)\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $user_id))
		{
			header("location: view_user.php?errMsg1=Wrong Aguements was observed");
			die();
		}
		else
		{
			
		}
		if(isset($user_id) && $user_id != '' && !empty($user_id))
		{
			$user_login_upadate = mysql_query("UPDATE user_login SET email = '$email', password = '$password' WHERE id = '$user_id' ");
			$user_login_upadate = mysql_query("UPDATE user_data SET firstname = '$firstname', lastname = '$lastname', address = '$address', city = '$city', state = '$state', zip = '$zip', mobile = '$phone', date_reg = '$reg_date' WHERE u_id = '$user_id' ");
		}
	
	if(!mysql_error())
	{
		header("location: user_account_details.php?errMsg1=User Update was successful&user_id=$user_id");
		die();
		mysql_close();
	}
	else
	{
		header("location: user_account_details.php?errMsg1=An error occured&user_id=$user_id");
		die();
		mysql_close();
	}
?>