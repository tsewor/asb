<?php
include 'control.php';
$errMsg = $_GET['errMsg1'];
$user_acc = $_POST['check'];
if(preg_match('/[a-zA-z_@#\'\\/~`\!%\^&\*\(\)\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $user_acc))
		{
			header("location: check_statement_error.php?errMsg1=Only Numeric Characters are required for Account Number");
			die();
		
		}
		else
		{
			$user_id = $user_acc;
		}
$sel3 = mysql_query("SELECT * FROM user_acc WHERE acc_no = '$user_id'");
while($account = mysql_fetch_array($sel3))
{
	$acc_id = $account['0'];
	$acc_Uid = $account['1'];
	$acc_no = $account['2'];
	$acc_bal = $account['3'];
}
$bank_state = mysql_query("SELECT * FROM trans WHERE sender = '$acc_Uid' OR receiver = '$acc_Uid'");
?>
<html>
<head>
	<title>Acount Statement</title>
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
			echo "<h4 id='notify' style='position: relative; width: 500px; height: 30px; line-height: 30px; margin-right: auto; margin-left: auto; text-align: center; margin-top: 10px; background:rgba(184,255,0,.8); border: 1px solid #ACACAC; border-radius: 5px; color: #666666;  '>". $errMsg . "</h4>";
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
				<li><a href='view_user.php'>View User</a></li>
			</ul>
		</p><br />
		<div id='act_table'>
			<p id='header'>
				<?php echo 'Users View'; ?>
			</p>
			<p>
			<?php echo "<p style='padding-left: 20px; color: #9B9B9B; '>   List of Users</p>" ?>
			</p>
		<div >
		<form action='search_user.php' method='POST' style='display: blodk; position: relative; width: 600px; height: auto; margin-right: auto; margin-left: auto;'>
		<input name='check' placeholder='Check User' type='text' style="position: relative; width: 80%; height: 40px; border-radius: 5px; border: 1px solid #9B9B9B; padding-left: 10px;" />
		<input type='submit' value='Check' style="position: relative; width: 15%; height: 40px; margin-top: 5px; margin-bottom: 5px;" />

		</form>
		<form action='delete_activity.php' method='POST' />
			<table id='table_activities' border="0">
			<tr>
			<th id='name'>Full Name</th><th id='account'>Account</th><th id='amount'> Date </th><th id='date'></th>
			</tr>
<?php
$sel_users = mysql_query("SELECT * FROM user_data");
while($data = mysql_fetch_array($sel_users))
{
	$u_id 			= $data['1'];
	$firstname 		= strtoupper($data['2']);
	$lastname 		= strtoupper($data['3']);
	$address 		= $data['4'];
	$city 			= $data['5'];
	$state 			= $data['6'];
	$zip 			= $data['7'];
	$mobile			= $data['8'];
	$reg_date		= $data['9'];
	$full_name 		= $lastname.' '.$firstname;
$sel3 = mysql_query("SELECT acc_no FROM user_acc WHERE u_id = '$u_id'");
while($account = mysql_fetch_array($sel3))
{
	$acc_nuumber = $account['0'];
}
	echo "<tr><td style='background-color: #F0F0F0;'><a style='display: block; width: auto; height: auto; text-decoration: none; color: #757575 ' href='user_account_details.php?user_id=$u_id'>$full_name</a></td><td>$acc_nuumber</td><td> $reg_date</td><td><a href='delete_user.php?id=$u_id'>Delete</a></td>
	</tr>";
}
	?>
</table>
		
		</div>
		</div>
		<div id='act_footer'>
			<a id='next_act' href='#?pg=<?php echo $pageNumber ?>'>Next</a>
			<a id='prev_act' href='#?pg=<?php echo $pageNumber ?>'>Prev</a>
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