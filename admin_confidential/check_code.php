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
$user_acc = $_POST['check'];
if(!preg_match('/[a-zA-z_@#\'\\/~`\!%\^&\*\(\)\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $user_acc))
		{
		$rec_acc = $user_acc;
		}
		else
		{
			header("location: transfer_code.php?errMsg=Only Numeric Characters are required for Account Number");
			die();
		}
}
$check_user = mysql_query("SELECT u_id FROM user_acc WHERE acc_no = '$rec_acc'");
$user_account = mysql_fetch_row($check_user);
$user_id = $user_account[0];
if(isset($user_id) && $user_id != '' )
{
	$code1 = mysql_query("SELECT code1 FROM trans_code WHERE u_id = '$user_id'");
	$code2 = mysql_query("SELECT code1 FROM trans_code1 WHERE u_id = '$user_id'");
	$code3 = mysql_query("SELECT code1 FROM trans_code2 WHERE u_id = '$user_id'");
	$code4 = mysql_query("SELECT code1 FROM trans_code3 WHERE u_id = '$user_id'");
	$code5 = mysql_query("SELECT code1 FROM trans_code4 WHERE u_id = '$user_id'");
	$code1_val = mysql_fetch_row($code1);
	$code2_val = mysql_fetch_row($code2);
	$code3_val = mysql_fetch_row($code3);
	$code4_val = mysql_fetch_row($code4);
	$code5_val = mysql_fetch_row($code5);
	$cd1 = $code1_val[0];
	$cd2 = $code2_val[0];
	$cd3 = $code3_val[0];
	$cd4 = $code4_val[0];
	$cd5 = $code5_val[0];
}
?>
<html>
<head>
	<title>Transfer Funds</title>
	<link rel='icon' href='images/pub.png' type='image/png'>
	<link rel="stylesheet" type="text/css" href="stylebox/pageStyle.css" />
	<script src="jquery.js"></script>
	<style>
#logo
{
	position: relative; 
	float: left; 
	width: 50px; 
	height: 50px; 
	border: 1px solid black; 
	border-radius: 100%;
	top: 3px;
	margin-left: 15px;
}

	</style>
</head>
<body onclick="$('#notify').fadeOut('slow');">
	<div id='overallContainer'>
	<div id='banner'>
	<img src='images/phone' id='logo' />
	<?php include "menu.php"; ?>
	<a href='logout.php' id='logout'>Logout</a>	
	</div>
	<div id='bodyContainer'>
	<h1 id='heading'><?php echo $heading ?></h1>
	<div id='heading_info'>
		<br />
		<br />
	</div>
	<?php if(isset($errMsg) && !empty($errMsg))
		{
			echo "<h4  id='notify' style='position: relative; width: 700px; height: 30px; line-height: 30px; margin-right: auto; margin-left: auto; text-align: center; margin-top: 10px; background:rgba(184,255,0,.8); border: 1px solid #ACACAC; border-radius: 5px; color: #666666;  '>". $errMsg . "</h4>";
		} 
	?>
<div id='activities'>
		<p id='act_list'>
			<ul>
				<li><a href='home.php'>Activities</a></li>
				<li><a href='user_account_details.php'>User Account Detail</a></li>
				<li><a href='user_account_statement.php'>User Account Statement</a></li>
				<li><a href='transfer_funds.php'>Credit Transfers</a></li>
				<li><a href='transfer_code.php'>Transfers Code</a></li>
			</ul>
		</p><br />
		<div id='act_table'>
			<p id='header'>
				<?php echo 'View Transfer Code'; ?>
			</p>
		<div >
		
		<p style='position: relative; margin-left: 50px; margin-top: 5px; color: #707070;'>This section is to view all codes for Transfer processes.<br />
		<form action='check_code.php' method='POST' style='display: blodk; position: relative; width: 600px; height: auto; margin-right: auto; margin-left: auto;'>
		<input name='check' placeholder='Check User' type='text' style="position: relative; width: 80%; height: 40px; border-radius: 5px; border: 1px solid #9B9B9B; padding-left: 10px;" />
		<input type='submit' value='Check' style="position: relative; width: 15%; height: 40px;" />

		</form>
		<form action='create_code.php' method='POST' style='position: relative; width: 700px; margin-right: auto; margin-left: auto; margin-top: 10px;' />
		<div style='position:relative; width: 100%; height: 30px; line-height: 30px; background: rgba(120,120,120,.6); text-align: center; color: #E7E7E7;'>View Transfer Code</div>
			<table>
			<tr><td> <span>Account Number</span>   </td><td> <input type='text' disabled='disabled' <?php if(isset($rec_acc) && $rec_acc  != ''){ echo 'value='.$rec_acc ;} ?> />   </td></tr>
			<tr><td>  <span>Transfer Code 1</span>  </td><td> <input type='text' disabled='disabled' <?php if(isset($cd1) && $cd1  != ''){ echo 'value='.$cd1 ;} ?> />   </td></tr>
			<tr><td>  <span>Transfer Code 2</span>  </td><td> <input type='text' disabled='disabled' <?php if(isset($cd2) && $cd2  != ''){ echo 'value='.$cd2 ;} ?> />   </td></tr>
			<tr><td>  <span>Transfer Code 3</span>  </td><td> <input type='text' disabled='disabled' <?php if(isset($cd3) && $cd3  != ''){ echo 'value='.$cd3 ;} ?> />   </td></tr>
			<tr><td>  <span>Transfer Code 4</span>  </td><td> <input type='text' disabled='disabled' <?php if(isset($cd4) && $cd4  != ''){ echo 'value='.$cd4 ;} ?> />   </td></tr>
			<tr><td>  <span>Transfer Code 5</span>  </td><td> <input type='text' disabled='disabled' <?php if(isset($cd5) && $cd5  != ''){ echo 'value='.$cd5 ;} ?> />   </td></tr>
			</td></tr>
			

			
			</table>
		</div>
		</div>
		<div id='act_footer'>
		
			
		</div>

</form>
</div>


	</div>

<div id='footer'>
	
</div>

	</div>
	<script>
// setInterval($('#notify').fadeIn('slow'),1000);
// setInterval($('#notify').fadeOut('slow'),1000);
$('#notify').fadeOut('slow');
$('#notify').fadeIn('slow');
$('#notify').fadeOut('slow');
$('#notify').fadeIn('slow');
$('#notify').fadeOut('slow');
$('#notify').fadeIn('slow');
</script>
</body>
</html>