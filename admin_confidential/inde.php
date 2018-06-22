<?php
error_reporting(o);
$errMsg = $_GET['errMsg'];
$acc_No = $_GET['acc_no'];

?>

<html>
<head>
	<title>Login Page</title>
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
	

		
	</div>
	<div id='login_bodyContainer' style='height: 75%;'>
	<h1 style='position: relative; text-align: center;'>Control Panel</h1>
	
<?php if(isset($errMsg) && !empty($errMsg))
		{
			echo "<h4 id='notify' style='position: relative; width: 500px; height: 30px; line-height: 30px; margin-right: auto; margin-left: auto; text-align: center; margin-top: 10px; background:rgba(184,255,0,.8); border: 1px solid #ACACAC; border-radius: 5px; color: #666666;  '>". $errMsg . "</h4>";
		} 
	?>
	<div id='login_form'>
	
	<form  action='login1.php' method='POST'>
	<input id='email' type='text' name='username' Placeholder='Enter Username' onfocus="document.getElementById('email').style.border='1px solid #8585FF'; $('#notify').fadeOut('slow');";
	onblur="document.getElementById('email').style.border='1px solid #ACACAC';" /><br />
	<input id='pass' type='password'  name='password' Placeholder='Enter Password' onfocus="document.getElementById('pass').style.border='1px solid #8585FF';$('#notify').fadeOut('slow');";
	onblur="document.getElementById('pass').style.border='1px solid #ACACAC';" /><br />
	<input id='login_submit' type='submit' name='login' value='Log In' /><br />
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