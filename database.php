<?php
$url='localhost';
$username='id13517175_hemanth';
$password='p<Fl~>^#%zW^60bT';
$dbname='id13517175_testproject';
$conn=mysqli_connect($url,$username,$password,$dbname);
if(!$conn){
 die('Could not Connect My Sql:' .mysqli_error());
}
?>