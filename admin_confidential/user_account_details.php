<?php
include 'control.php';
$errMsg = $_GET['errMsg'];
?>
<html>
<head>
	<title>Account Details</title>
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
#act_footer a
{
	position: relative;
	display: block;
	width: 25%;
	height: 30px;
	border: 1px dashed black;
	text-decoration: none;
	text-align: center;
	line-height: 30px;
	top: 15px;
	margin-right: auto;
	margin-left: auto;
	border-radius: 5px;
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
				<?php echo "View User's Account Details"; ?>
			</p>
		<div >
		<p style='position: relative; margin-left: 50px; margin-top: 5px; color: #707070;'> View current information present on <b><?php echo $acc_no; ?> </b>Account.</p>
		<form action='check_user_detail.php' method='POST' style='display: blodk; position: relative; width: 600px; height: auto; margin-right: auto; margin-left: auto;'>
		<input name='check' placeholder='Check User' type='text' style="position: relative; width: 80%; height: 40px; border-radius: 5px; border: 1px solid #9B9B9B; padding-left: 10px;" />
		<input type='submit' value='Check' style="position: relative; width: 15%; height: 40px;" />

		</form>
		<form action='delete_activity.php' method='POST' style='position: relative; width: 700px; margin-right: auto; margin-left: auto; margin-top: 10px;' />
		<div style='position:relative; width: 100%; height: 30px; line-height: 30px; background: rgba(120,120,120,.6); text-align: center; color: #E7E7E7;'>Account Details</div>
			
			<table>
			<tr><td> <span>User Fullname</span>  </td><td><input type='text'  disabled="disabled" value="<?php echo $lastname.' '.$firstname;  ?>" />    </td></tr>
			<tr><td> <span>Email ID</span>   </td><td> <input type='text'  disabled="disabled" value="<?php echo $mail;  ?>"/>   </td></tr>
			<tr><td> <span>Phone Number</span>   </td><td> <input type='text'  disabled="disabled" value="<?php echo '('.$zip.') '.$mobile;  ?>"/>   </td></tr>
			<tr><td> <span>Address</span>   </td><td> <textarea disabled='disabled' style='position: relative; min-width: 300px;'> <?php echo $address;  ?> </textarea>   </td></tr>
			<tr><td> <span>City, State</span>   </td><td> <input type='text'  disabled='disabled' value="<?php echo $city.', '.$state;  ?>"/>   </td></tr>
			<tr><td>  <span>Zip Code</span>  </td><td> <input type='text'  disabled='disabled' value="<?php echo $zip;  ?>"/>   </td></tr>
			<tr><td> <span>Account Number</span>   </td><td><input type='text'  disabled='disabled' value="<?php echo $acc_no;  ?>"/>    </td></tr>
			<tr><td> <span>Account Password</span>   </td><td><input type='text'  disabled='disabled' value="<?php echo $password;  ?>"/>    </td></tr>
			<tr><td>  <span>Account Balance</span>  </td><td> <input type='text'  value="<?php echo '$'.$acc_bal; ?>" disabled='disabled'/>   </td></tr>
			<tr><td>  <span>Account Created</span>  </td><td> <input type='text'  value="<?php echo $reg_date; ?>" disabled='disabled'/>   </td></tr>
			</table>


		</div>

		</div>
		<br />
		<div id='act_footer'>
			<a href='user_account_details_update.php?user_id=<?php echo $id; ?>'>Update This User's Details</a>
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