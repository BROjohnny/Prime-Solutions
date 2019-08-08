<?php 
session_start();

/*$hostname="sql307.gofreeserve.com"; // Host name 
$username="gofre_7460422"; // Mysql username 
$password="5bdZuS7r"; // Mysql password 
$database="gofre_7460422_logindata"; // Database name */

$hostname = "localhost";
$database = "pdm";
$username = "root";
$password = "";

$new_test = mysql_pconnect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR);
//$new_test = mysql_pconnect("$host","$username","$password")or die("cannot connect to server");
 

mysql_select_db($database, $new_test) or DIE("Database name not available !!");


?>