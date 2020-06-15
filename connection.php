<?php
$host = "localhost";
$user="id13517175_hemanth";
$password= "p<Fl~>^#%zW^60bT";
$db_name="id13517175_testproject";
$con =mysqli_connect($host,$user,$password,$db_name);
if(mysqli_connect_errno())
{
	die("failed to connect".mysqli_connect_errno());

}
?>