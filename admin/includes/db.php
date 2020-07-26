<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
mysqli_set_charset($con, 'utf8');
$servername = "localhost";
$username = "root";
$password = "";
$db = "sws";
$con = mysqli_connect("$servername", "$username", "$password");
 mysqli_set_charset($con ,'utf8');
mysqli_select_db($con, $db);
if (!$con) {
	echo "successful";
}

 ?>