<?php
session_start(); # Starts the session
unset($_SESSION['admin']); # removes all the variables in the session
session_destroy(); # destroys the session
$announce = $_GET['announce'];
if($_SESSION['admin'] == '' || empty($_SESSION['admin']))
{
		header('location: index.php');
		die();
}
else
{
	echo "Error Occured!!<br />";
}	
?>