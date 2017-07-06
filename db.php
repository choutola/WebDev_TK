<?php 
$con = mysqli_connect("localhost","root","","phpdb") or die("Connnection Fail!");

function mres($text){
	$text = rtrim(ltrim($text));
	return mysql_real_escape_string($text);
}
?>
