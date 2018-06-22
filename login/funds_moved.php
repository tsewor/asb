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
	<?php include "menu.php"; ?>
	<a href='logout.php' id='logout'>Logout</a>
<?php
	if(isset($dp) && $dp != '')
	{
		echo "<img src='../account_passport/$dp' id='dp_avatar' />";
	}else{
		echo "<img id='dp_avatar' src='dp.png'>";
	}
	echo "<div id='user'>".$full_name.'</div>';
?>
		
	</div>
	<div id='bodyContainer' style="height: auto;">
<img src='images/okay.ico' style='display: block; position: relative; margin-right: auto; margin-left: auto; margin-top: 30px;'/>
<p style='display: block; position: relative; width: 70%; margin-right: auto; margin-left: auto; text-align: justify; line-height: auto;'>
<span style='display: block; width: auto; position: relative; font-size: 30px; color: green; text-shadow: 1px 1px black; margin-right: auto; margin-left: auto; text-align: center; margin-bottom: 10px;'><?php echo $errMsg ; ?></span>
Your requested for Funds Transfer to your person account in another Bank with the name <b><?php echo $full_name; ?></b> has been received and it will be processed in a very while.<br /><br /> <b><center>Thanks for banking with us.</center></b>
<br /><br />
<a href="home.php" style="display: block; text-align: center; margin-top: 100px;">Go back</a>
	

</div>
<div id='footer'>
	<?php include 'footer.php'; ?>
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