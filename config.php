<?php
define('DB_SERVER','localhost');
define('DB_USER','id13517175_hemanth');
define('DB_PASS' ,'p<Fl~>^#%zW^60bT');
define('DB_NAME', 'id13517175_testproject');
$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>