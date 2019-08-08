<?php
session_start();
function pw($length,$level){

list($usec, $sec) = explode(' ', microtime());
srand((float) $sec + ((float) $usec * 100000));

$validchars[1] = "0123456789abcdfghjkmnpqrstvwxyz";
$validchars[2] = "0123456789abcdfghjkmnpqrstvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
$validchars[3] = "0123456789_!@#$%&*()-=+/abcdfghjkmnpqrstvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ_!@#$%&*()-=+/";

$pass = "";
$counter = 0;

while ($counter < $length) {
$actChar = substr($validchars[$level], rand(0, strlen($validchars[$level])-1), 1);

// All character must be different
if (!strstr($pass, $actChar)) {
$pass .= $actChar;
$counter++;
}
}

return $pass;

}



/*$server = "sql307.gofreeserve.com";
$username = "gofre_7460422";
$password = "5bdZuS7r";
$db_name = "gofre_7460422_logindata";*/

$hostname = "localhost";
$database = "pdm";
$username = "root";
$password = "";


$db = mysql_connect($hostname,$username,$password) or DIE("Connection to database failed, perhaps the service is down !!");
mysql_select_db($database) or DIE("Database name not available !!");

$ppw=pw(5,2);


$queryOne = mysql_query("Select Email from users where Email='".$_POST[em]."' ");
$row_count=mysql_num_rows($queryOne);

if($row_count==0){
   mysql_query("INSERT INTO users(userT,Lname,Email,pw,TP,address,province,city,nic,cardnumbr) 
   VALUES ('U','$_POST[ln]','$_POST[em]','$ppw','$_POST[tp]','$_POST[adr]','$_POST[pro]','$_POST[cty]','$_POST[nic]','$_POST[ccn]')");

 $to = '$_POST[em]';
 $subject = "YOUR Password";
 $body = "Password for your account is '$ppw'";
 $headers = 'From: newsflash@news.com';
 if (mail($to, $subject, $body, $headers)) {
   echo("<p>Message successfully sent!</p>");
  } else {
   echo("<p>Message delivery failed...</p>");
  }
   $_SESSION['error']="Done";
   header("Location:home.php");

}


else {$_SESSION['error']="E-mail has been used";
     header("Location:SignUp.php");
     }








mysql_close();





?>