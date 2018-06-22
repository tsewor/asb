<?php
include 'control.php';
$errMsg 		= $_GET['errMsg'];
$rec_title 		= $_GET['rec_title'];
$rec 			= $_GET['rec'];
$rec_acc 		= $_GET['rec_acc'];
$swift 			= $_GET['swift'];
$amount 		= $_GET['amount'];
$desc 			= $_GET['desc'];
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
				<li><a href='view_user.php'>View User</a></li>
			</ul>
		</p><br />
		<div id='act_table'>
			<p id='header'>
				<?php echo 'Funds Transfer'; ?>
			</p>
		<div >
		
		<p style='position: relative; margin-left: 50px; margin-top: 5px; color: #707070;'>Funds transfer is a process of transfering funds from your account to other account in same Bank.<br />
		<form action='check_code.php' method='POST' style='display: blodk; position: relative; width: 600px; height: auto; margin-right: auto; margin-left: auto;'>
		<input name='check' placeholder='Check User' type='text' style="position: relative; width: 80%; height: 40px; border-radius: 5px; border: 1px solid #9B9B9B; padding-left: 10px;" />
		<input type='submit' value='Check' style="position: relative; width: 15%; height: 40px;" />

		</form>
		<form action='create_code.php' method='POST' style='position: relative; width: 700px; margin-right: auto; margin-left: auto; margin-top: 10px;' />
		<div style='position:relative; width: 100%; height: 30px; line-height: 30px; background: rgba(120,120,120,.6); text-align: center; color: #E7E7E7;'>Transfer Funds</div>
			<table>
			<tr><td> <span>Account Number</span>   </td><td> <input type='text' name='user_acc' <?php if(isset($rec_acc) && $rec_acc  != ''){ echo 'value='.$rec_acc ;} ?> />   </td></tr>
			<tr><td>  <span>Transfer Code</span>  </td><td> <input type='text' name='code' <?php if(isset($amount) && $amount  != ''){ echo 'value='.$amount ;} ?> />   </td></tr>
			</td></tr>
			<tr><td> <span>Transfer Code Option</span>   </td><td> 
			<select name='trans_code_type'>
			<option value="1">COT Code</option>
			<option value="2">SWIFT Code</option>
			<option value="3">Code 3</option>
			<option value="4">Code 4</option>
			<option value="5">Code 5</option>
			</select>

			   </td></tr>
			</table>
		</div>
		</div>
		<div id='act_footer'>
		<input id='transfer_fund' type='submit' value='Transfer' style='padding-right: 10px; padding-left: 10px; width: 150px; float: right; right: 40px;'/>
			
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