<?php include_once("config.php"); ?>
<?php

$query1 = mysql_query("Select userT from users where Email='$_POST[un]' ");
    $row_count=mysql_fetch_array($query1);
$_SESSION['type']=$row_count[0];

 if(isset($_SESSION['error'])){
 $se=$_SESSION['error'];
 if($se=="Done"){
echo '<script language="javascript">alert("Successfully registered.Check your mails")</script>';
session_unset($_SESSION['error']);
}
else{

echo '<script language="javascript">alert("Invalied E-mail or Password")</script>';
session_unset($_SESSION['error']);
}
}



?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Business Company</title>
<meta http-equiv="Content-Style-Type" content="text/css">
<LINK HREF="style.css" TYPE="text/css" REL="stylesheet">

 <script type="text/JavaScript">
<!--



function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>
<SCRIPT LANGUAGE="JavaScript">

function text(){
document.login.un.value="";
document.getElementById("un").focus();
return true;
}
function text1(){
document.login.pw.value="";

document.getElementById("pw").type='password';

		document.getElementById("pw").focus();



return true;
}


</script>

    <script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
	
<style type="text/css">
<!--
.style9 {color: #0033FF}
.style10 {color: #D4D0C8}
.style11 {color: #000000}
.style13 {color: #003399}
.style16 {font-size: 12px}
.style17 {
	font-size: 14px;
	color: #003399;
}
.style18 {color: #000066}
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
<div style="float:right; padding-top:10px;">
<a href="index.html" class="menu">Home page</a><img src="images/line_menu.jpg" align="left">
<a href="index-1.html" class="menu">Products</a><img src="images/line_menu.jpg" align="left">
<a href="index-2.html" class="menu">Subscribes</a><img src="images/line_menu.jpg" align="left">
<a href="index-5.html" class="menu">About us</a><a href="index-5.html" class="menu">Contact us</a><img src="images/line_menu.jpg" align="left">
<a href="index-5.html" class="menu">Site Map</a></div></td>
  </tr>
  <tr>
    <td width="1000" height="6" valign="top"></td>
  </tr>
  <tr>
    <td width="1000" height="280" valign="top" class="header"><p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><img src="images/pictures/cooltext512223740.png" width="341" height="133"></p>
    <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td width="1000" height="15" valign="top"></td>
  </tr>
  <tr>
    <td width="1000" height="100" valign="top"><table width="1000" height="100" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="340" height="100" valign="top" class="tab"><span class="style10"><strong><img src="images/y1.jpg" align="left"><img src="images/y2.jpg" align="right">
            </strong>
          </span>
          <div class="blok"><span class="style13 style16 blok style13"><strong>News and Events</strong></span><img src="images/line1.jpg" class="line" width="300" height="2"><br>
            <form action="userlogin.php" method="post" name="form1" class="style11">
                 
                  <label><span class="blok style17"><strong>User Login</strong></span><br>
                  <br>
                  User Name: 
                 <input name="un" type="Text" id="un" value="E-MAIL ADDRESS" size="15" onClick="javascript : if(text()) return true;return false;">
</label>
                 
                    <br>
                  Password &nbsp;:
                      <input name="pw" type="text" id="pw" value="PASSWORD" size="10" onClick="javascript : if(text1()) return true;return false;">
                      <input type="image" name="imageField" value="Submit" id="imageField" src="images/pictures/cooltext512226132 (1).png" width="66" height="40" border="0" start="mouseover" align="absmiddle"></a>
            </form>
           New to NewsFlash? It's free and easy.<br>
            <a href="index-2.html" class="account">Create an account &gt;&gt;</a>          </div>
            <table width="330" border="0" cellpadding="3">
              <tr>
                <td><span class="style13 style16 blok"><strong>Best Services</strong></span><br>
                  <img src="images/line.jpg" class="line" width="290" height="2"><br>
                  <ul class="li">
                    <li><a href="#" class="read">Provide Magazines </a></li>
                    <li><a href="#" class="read">Online payment services</a></li>
                    <li><a href="#" class="read">Latest publications</a></li>
                    <li><a href="#" class="read">Advertising</a></li>
                    <li><a href="#" class="read">Submit delivery problems </a></li>
                    <li><a href="#" class="read">Setup Vaction holds </a></li>
                </ul></td>
                <td>&nbsp;</td>
              </tr>
            </table></td>
        <td width="660" height="100" valign="top"><div class="blok">
          <p><span class="name style18">WELCOME to our site!</span><br>
                  <img src="images/line.jpg" class="line" width="620" height="2"><br>
                  <img src="images/im01.jpg" class="pictures"><br>
NewsFlashn is one of the leading agencies in Sri Lanka which provides daily news updates.NewsFlash  produces specialty publications, online interactive content, magazines and provide an easy way to read news papers. <br>
          <img src="images/read.gif" align="absmiddle" class="read_im"><a href="#" class="read"><strong>read more</strong></a></p>
          <p>&nbsp;</p>
        </div>          
        
          <table width="658" height="306" border="0" cellpadding="3">
            <tr>
              <td width="310" height="27"><span class="style13 style16 blok"><strong>Subscription services</strong></span><span class="name style11"><img src="images/line1.jpg" class="line" width="300" height="2"> </span><br>              </td>
              <td width="324"><span class="style13 blok"><strong>NewsFlash publications </strong></span><br>
                <img src="images/line1.jpg" class="line" width="300" height="2"></td>
            </tr>
            <tr>
              <td height="269"> <p>Managing your account online is fast and simple. In a few steps you&rsquo;re ready to take full advantage of these subscription services: </p>
                <ul>
                  <li>Make a payment</li>
                  <li>Start a new subscription</li>
                  <li>Report delivery problems</li>
                  </ul>
                <p><span class="style9">Register Today </span><img src="images/arrow.jpg" width="25" height="15">
				<a href="index-4.html"><img src="images/newspaper.gif" width="108" height="91"></a></p></td>
              <td><p>Top stories about the latest news events and the latest updates of the NewsFlash agency...... </p>
                <p><img src="images/excl_zeusbox_aprbatch_17.jpg" width="166" height="188"></p></td>
            </tr>
          </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td width="1000" height="53" valign="top" class="bottom"><img src="images/bot1.jpg" align="left"><img src="images/bot2.jpg" align="right">
       <img src="images/bot1.jpg" align="left"><img src="images/bot2.jpg" align="right">
<div class="copyright"></div>
<div class="menu_bot">
<a href="indexx.html" class="menu_bottom">Home page</a> &nbsp; &nbsp; | &nbsp; &nbsp; 
<a href="index-1.html" class="menu_bottom">Products</a> &nbsp; &nbsp; | &nbsp; &nbsp; 
<a href="index-2.html" class="menu_bottom">Subscibes</a> &nbsp; &nbsp; | &nbsp; &nbsp;
<a href="index-3.html" class="menu_bottom">About us </a> &nbsp; &nbsp; | &nbsp; &nbsp; 
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