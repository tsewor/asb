<?php
include 'control.php';

?>
<html>
<head>
	<title>Acount Statement</title>
	<link rel='icon' href='images/pub.png' type='image/png'>
	<link rel="stylesheet" type="text/css" href="stylebox/pageStyle.css" />
	
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
<body>
	<div id='overallContainer'>
	<div id='banner'>
	<img src='images/phone' id='logo' />
	<?php include "menu.php"; ?>
	<a href='logout.php' id='logout'>Logout</a>
<?php
	if(isset($dp) && $dp != '')
	{
		echo "<img src='photo/$dp' id='dp_avatar' />";
	}else{
		echo "<img id='dp_avatar' src='images/dp.png'>";
	}
	echo "<div id='user'>".$full_name.'</div>';
?>
		
	</div>
	<div id='bodyContainer'>
	<h1 id='heading'><?php echo $heading ?></h1>
	<div id='heading_info'>
		<br />
		<br />
	</div>
	
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
				<?php echo 'Selected Activity Here'; ?>
			</p>
			<p id='download_rec'>
				
			</p>
		<div >
		<form action='delete_activity.php' method='POST' />
		
		</div>
		</div>
		<div id='act_footer'>
		<!-- <input id='act_checked_del_botton' type='submit' value='Delete checked items' /> -->
			<!-- <a id='next_act' href='#?pg=<?php echo $pageNumber ?>'>Next</a>
			<a id='prev_act' href='#?pg=<?php echo $pageNumber ?>'>Prev</a> -->
		</div>

</form>
</div>


	</div>

<div id='footer'>
	
</div>

	</div>
</body>
</html>