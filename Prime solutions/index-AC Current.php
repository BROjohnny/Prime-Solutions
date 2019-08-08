<?php include_once("config.php"); ?>
<?php
if(empty($_SESSION['email'])){ header("Location:home.php");}
if(!empty($_SESSION['type'])){
 if($_SESSION['type']=="U")header("Location:home.php");}
 $_SESSION['admin']="View"; 
 
 
if(isset($_SESSION['error1'])){
 $se=$_SESSION['error1'];
 if($se=="Done"){
echo '<script language="javascript">alert("Done")</script>';
$_SESSION['error1']="";}
}

?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>NewsFlash - Current Info</title>
<meta http-equiv="Content-Style-Type" content="text/css">
<LINK HREF="style.css" TYPE="text/css" REL="stylesheet">
<style type="text/css">
<!--
.style2 {font-size: 10px}
.style3 {color: #000000}
.style4 {font-size: 12px}
.style5 {color: #000000; font-size: 12px; }
-->
</style>
</head>
<body>
<table width="1000" height="100%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td width="1000" height="21" valign="top"><img src="images/top.jpg" align="right"></td>
  </tr>
  <tr>
    <td width="1000" height="51" valign="top" class="men"><img src="images/menu_left.jpg" align="left"><img src="images/menu_right.jpg" align="right">
<div style="float:center; padding-top:10px;">
<span class="style2"><span class="style3"><span class="style4"><a href="index-AC Current.html" class="menu">Current Info</a><img src="images/line_menu.jpg" align="left"><a href="index-AC Summary.html" class="menu">Summary Info</a><img src="images/line_menu.jpg" align="left"></span>
</span></span><a href="index-4.html" class="menu">Site Map</a></div></td>
  </tr>
  <tr>
    <td width="1000" height="10" valign="top"></td>
  </tr>
  <tr>
    <td width="1000" height="284" valign="top" class="header"><p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><img src="images/pictures/cooltext512223740.png" width="341" height="133"></p></td>
  </tr>
  <tr>
    <td width="1000" height="15" valign="top"></td>
  </tr>
  <tr>
    <td width="1000" height="100" valign="top">
<table width="858" height="100" border="0" cellspacing="0" cellpadding="0">
  <tr>
     <td width="620" height="100" valign="top"><div class="blok">
       <p><br>
       <br>
       </p>
      
       <table width="649" height="354" border="1" cellpadding="3" align="center">
         <tr>
           <td width="188"><strong>Customer name </strong></td>
           <td width="155"><strong>Publication name </strong></td>
           <td width="109"><strong>Date</strong></td>
           <td width="153"><strong>status</strong></td>
         </tr>
         <tr>
           <td height="59">&nbsp;</td>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
         </tr>
       </table>
       <p>&nbsp; </p>
     </div></td>
</tr>
</table>
	</td>
  </tr>
  <tr>
    <td width="1000" height="53" valign="top" class="bottom"><img src="images/bot1.jpg" align="left"><img src="images/bot2.jpg" align="right">
<div class="copyright"></div>
<div class="menu_bot">
<a href="indexx.html" class="menu_bottom">Home page</a> &nbsp; &nbsp; | &nbsp; &nbsp; 
<a href="index-1.html" class="menu_bottom">Products</a> &nbsp; &nbsp; | &nbsp; &nbsp; 
<a href="index-2.html" class="menu_bottom">Subscibes</a> &nbsp; &nbsp; | &nbsp; &nbsp;
<a href="index-3.html" class="menu_bottom">About us</a> &nbsp; &nbsp; | &nbsp; &nbsp; 
<a href="index-5.html" class="menu_bottom">Contact us </a> &nbsp; &nbsp; | &nbsp; &nbsp; 
<a href="index-4.html" class="menu_bottom">Site Map </a>
</div>	
	</td>
  </tr>
  <tr>
    <td width="1000" height="20" valign="top"></td>
  </tr>
</table>
</body>
</html>