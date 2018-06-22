<?php 
$host = 'localhost';
$user = 'classics_asb';
$pass = '1thousand5#';
$db   = 'classics_asb';
$con = mysql_connect($host, $user, $pass);
$set_data = mysql_select_db($db);
if(mysql_error())
{
	echo 'There was error connecting to database';
	die();
}
?>