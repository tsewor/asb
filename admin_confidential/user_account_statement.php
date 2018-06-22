<?php
include 'control.php';
$errMsg = $_GET['errMsg'];
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
td a
{
	border-radius: 0px 10px 0px 10px;
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
				<?php echo 'Account Statement'; ?>
			</p>
			<p>
			<?php echo "Checking Statement for <b>$user_id</b> Account" ?>
			</p>
		<div >
		<form action='user_account_statement.php?errMsg=' method='POST' style='display: blodk; position: relative; width: 600px; height: auto; margin-right: auto; margin-left: auto;'>
		<input name='check' placeholder='Check User' type='text' style="position: relative; width: 80%; height: 40px; border-radius: 5px; border: 1px solid #9B9B9B; padding-left: 10px;" />
		<input type='submit' value='Check' style="position: relative; width: 15%; height: 40px; margin-top: 5px; margin-bottom: 5px;" />

		</form>
		<form action='delete_activity.php' method='POST' />
			<table id='table_activities' >
			<tr>
			<th id='name'>Ref No.</th><th id='account'>Account</th><th id='amount'> Debit </th><th id='amount'> Credit </th><th id='date'>Date</th>
			</tr>
			<?php
while($b_statement = mysql_fetch_array($bank_state))
			{
				$statement_id 	= $b_statement[0];
				$bank_sender	= $b_statement[1];
				$bank_rec		= $b_statement[2];
				$bank_ref		= $b_statement[3];
				$bank_amount	= $b_statement[4];
				$bank_trans_type= $b_statement[5];
				$bank_descript	= $b_statement[6];
				$bank_trans_date= $b_statement[7];
	if($bank_sender == $acc_Uid && $bank_rec == $acc_Uid)
		{
			$receiver_acc_num = '<img src="images/wallete.ico" style="position: relative; width: 30%; height: 20px;">';
			echo "<tr><td><a href='user_account_statement_delete.php?id=$statement_id' style='position: relative; display: block; width: 25px; height: 25px; border: 1px dotted black; color: red; font-size: 20px; text-decoration: none; font-family: arial; float: left;'>x</a>$bank_ref</td><td>$receiver_acc_num </td><td> $bank_amount </td><td>  </td><td>$bank_trans_date</td>
	</tr>";
		}
		else if($bank_sender == $acc_Uid )
	{
		$rec_by = mysql_query("SELECT acc_no FROM user_acc WHERE u_id = '$bank_rec'");
		$receive_by = mysql_fetch_row($rec_by);
		$receiver_acc_number = $receive_by[0];
		
		{
			echo "<tr><td><a href='user_account_statement_delete.php?id=$statement_id' style='position: relative; display: block; width: 25px; height: 25px; border: 1px dotted black; color: red; font-size: 20px; text-decoration: none; font-family: arial; float: left;'>x</a>$bank_ref</td><td>$receiver_acc_number </td><td> $bank_amount </td><td>  </td><td>$bank_trans_date</td>
	</tr>";
		}
		
	}
	if($bank_sender != $acc_Uid)
	{
		$rec_by = mysql_query("SELECT acc_no FROM user_acc WHERE u_id = '$bank_sender'");
		$sender_by = mysql_fetch_row($rec_by);
		$sender_acc_number = $sender_by[0];
		if($bank_sender == 1)
		{
			$sender_acc_number = '<img src="images/BasicMoney.ico" style="position: relative; width: 30%; height: 20px;">';
		}
		else if($bank_sender == 2)
		{
			$sender_acc_number = '<img src="images/paypal.ico" style="position: relative; width: 30%; height: 40px;">';
		}
		else if($bank_sender == 3)
		{
			$sender_acc_number = '<img src="images/western.ico" style="position: relative; width: 30%; height: 40px;">';
		}
		echo "<tr><td><a href='user_account_statement_delete.php?id=$statement_id' style='position: relative; display: block; width: 25px; height: 25px; border: 1px dotted black; color: red; font-size: 20px; text-decoration: none; font-family: arial; float: left;'>x</a>$bank_ref</td><td>$sender_acc_number </td><td>  </td><td> $bank_amount  </td><td>$bank_trans_date</td>
	</tr>";
	}
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