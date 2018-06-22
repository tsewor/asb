<?php
session_start(); # Starts the session
unset($_SESSION['id']); # removes all the variables in the session
session_destroy(); # destroys the session
$announce = $_GET['announce'];
if($_SESSION['id'] == '' || empty($_SESSION['id']))
{
	header('location: ../index.php');
	die();
}
else
{
	echo "Error Occured!!<br />";
}	
?>