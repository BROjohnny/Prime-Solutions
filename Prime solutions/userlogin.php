<?php
//session_start();
//$server = "localhost";
//$username = "root";
//$password = "";
//$db_name = "pdm";
//
//$db = mysql_connect($server,$username,$password) or DIE("Connection to database failed, perhaps the service is down !!");
//mysql_select_db($db_name) or DIE("Database name not available !!");
include_once('config.php');

$query1 = mysql_query("Select * from users where Email='".$_POST["un"]."' and pw='".$_POST["pw"]."' ");
$row_count=mysql_num_rows($query1);

if($row_count==1){
  $query1 = mysql_query("Select * from users where Email='".$_POST["un"]."' and userT='A' ");
  $row_count=mysql_num_rows($query1);
  $query2 = mysql_query("Select Lname from users where Email='".$_POST["un"]."'");
  $row=mysql_fetch_array($query2)	;
$_SESSION['email']='$_POST["un"]';
$_SESSION['username']=$row['Lname'];;
	
  
  
  if($row_count==1)
  header("Location:index-AC.php");
  else
   header("Location:subscriibes.php");

}

else {$_SESSION['error']="Invalied E-mail or Password";
     header("Location:home.php");
     }

mysql_close();





?>