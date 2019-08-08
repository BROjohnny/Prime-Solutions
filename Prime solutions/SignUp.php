<?php
session_start();
  
			  
?>





<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>NewsFlash - Sign Up</title>
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
<script language="javascript">
function signup()
{
	if(CheakNull())
	{ if(checkPhone())
	{ if(emailvalidate())
	{ if(nicvalidate())
	{ if(checkCreditCard())
	{ return true;
	 }
	 }
	 }		
	 }
	 }
}							   

function CheakNull()
{


var fname=document.form1.fn.value;
var lname=document.form1.ln.value;
var email=document.form1.em.value;
var phone=document.form1.tp.value;
var add=document.form1.adr.value;
var prov=document.form1.pro.value;
var cty=document.form1.city.value;
var nicn=document.form1.nic.value;
var ccard=document.form1.ccn.value;
  
 if((fname==null)||(fname==""))
      {
      alert(" Please Enter First Name");
	  document.form1.fn.focus();
	  return false;
      }
   	
 else if((lname==null)||(lname==""))
  {
   alert("Please Enter Last Name ");
   document.form1.ln.focus();
   return false;
   }
 else if((email==null)||(email==""))
		    {
			   alert("Please Enter email");
			   document.form1.em.focus();
			   return false;		   
			}			
  
 else if((phone==null)||(phone==""))
	     {
		    alert("Please Enter Tel Number");
			document.form1.tp.focus();
			return false; 
		 }
else if((add==null)||(add==""))
	     {
		    alert("Please Enter Address");
			document.form1.adr.focus();
			return false; 
		 }
else if((prov==null)||(prov==""))
	     {
		    alert("Please Enter Province");
			document.form1.pro.focus();
			return false; 
		 }
else if((cty==null)||(cty==""))
	     {
		    alert("Please Enter City");
			document.form1.city.focus();
			return false; 
		 }
else if((nicn==null)||(nicn==""))
	     {
		    alert("Please Enter NIC Number");
			document.form1.nic.focus();
			return false; 
		 }
 else if((ccard==null)||(ccard==""))
	     {
		    alert("Please Enter Credit Card Number");
			document.form1.ccn.focus();
			return false; 
	     }														  
		 else
			{
			return true;
			}										   

}
	
function checkPhone()
   {
    var phone=document.form1.tp.value;
      if((isNaN(phone))||(phone.length!=10))
	      {
		    alert("Please Enter valid Telephone Number");
			document.form1.tp.focus();
			return false;
		  }	
		  else
		  {
		  return true;
		  }
	}


		
function emailvalidate()
{
 var validRegExp = /^[^@]+@[^@]+.[a-z]{2,}$/i;
 var strEmail = document.form1.em.value;

if (strEmail.search(validRegExp) == -1)
{
alert("Please Enter Valid Email Address");
document.form1.em.focus();
return false;
} 
else
{
return true;
}
}

function nicvalidate()
{
 var nicc=document.form1.nic.value;
      if((nicc.length!=10) || (nicc.charAt(9)!='V'))
	      {
		    alert("Please Enter valid NIC Number");
			document.form1.nic.focus();
			return false;
		  }	
		  else
		  {
		  return true;
		  }

}

function checkCreditCard() {
    var cc=document.form1.ccn.value;
      if((isNaN(cc))||(cc.length!=10))
	      {
		    alert("Please Enter valid Credit Card Number");
			document.form1.ccn.focus();
			return false;
		  }	
		  else
		  {
		  return true;
		  }

}


</script>

    <script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>
<body>
<table width="1000" height="100%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td width="1000" height="21" valign="top"><img src="images/top.jpg" align="right"></td>
  </tr>
  <tr>
    <td width="1000" height="51" valign="top" class="men"><img src="images/menu_left.jpg" align="left"><img src="images/menu_right.jpg" align="right">
<div style="float:right; padding-top:10px;">
<a href="indexx.html" class="menu">Home page</a><img src="images/line_menu.jpg" align="left">
<a href="index-1.html" class="menu">Products</a><img src="images/line_menu.jpg" align="left">
<a href="index-2.html" class="menu">Subscribes</a><img src="images/line_menu.jpg" align="left">
<a href="index-3.html" class="menu">About Us</a><img src="images/line_menu.jpg" align="left">
<a href="index-5.html" class="menu">Contact Us</a><img src="images/line_menu.jpg" align="left">
<a href="index-4.html" class="menu">Site Map</a></div></td>
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
<table width="1000" height="100" border="0" cellspacing="0" cellpadding="0">
  <tr>
     <td width="620" height="100" valign="top"><div class="blok">
       <p><span class="name">Sign Up for new users </span><br>
             <img src="images/line.jpg" class="line" width="620" height="2"><br>
         </p>
		 <form name="form1" method="post" action="dbusers.php">
       <table>
       <tbody>
         <tr>
           <td width="138" align="right">First Name :</td>
           <td width="363"><input type="text" name="fn" id="fn" onFocus="this.select()"></td>
         </tr>
         <tr>
           <td align="right">Last Name:</td>
           <td><input type="text" name="ln" id="ln" onFocus="this.select()"></td>
         </tr>
         <tr>
           <td align="right">E-mail :</td>
           <td><label>
                <input type="text" name="em" id="em" onFocus="this.select()">
                <?php   if(isset($_SESSION['error'])){
			  echo($_SESSION['error']);
			  session_destroy();}  ?>
           </label></td>
         </tr>
         <tr>
           <td align="right">Telephone Number :</td>
           <td><input type="text" name="tp" id="tp" onFocus="this.select()"></td>
         </tr>
         <tr>
           <td align="right">Address ::</td>
           <td><textarea name="adr" id="adr" onFocus="this.select()"></textarea></td>
         </tr>
         <tr>
           <td align="right">Province :</td>
           <td><input name="pro" type="text" id="pro" onFocus="this.select()"></td>
         </tr>
         <tr>
           <td align="right">City : </td>
           <td><input name="city" type="text" id="city" onFocus="this.select()"></td>
         </tr>
         <tr>
           <td align="right">NIC Number:</td>
           <td><input name="nic" type="text" id="nic" onFocus="this.select()"></td>
         </tr>
         <tr>
           <td align="right">Credit/Visa Card No:</td>
           <td><input name="ccn" type="text" id="ccn" onFocus="this.select()"></td>
         </tr>
         <tr>
           <td colspan="2">&nbsp;</td>
         </tr>
         <tr>
           <td colspan="2" > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;           
               <label></label>
             <input type="submit" name="Submit" id="button" value="Submit" onClick="javascript : if(signup()) return true;return false;">
             <input type="reset" name="button2" id="button2" value="Cancel "></td>
         </tr>
         <tr>
           <td align="left" colspan="2">&nbsp;</td>
         </tr>
         <tr>
           <td colspan="2">&nbsp;</td>
         </tr>
         <tr>
           <td align="right">     
           <td align="right">&nbsp;</td>
         </tr>
       </tbody>
     </table>
	 </form>
     </div></td>
<td width="380" height="100" valign="top" class="tab"><img src="images/y1.jpg" align="left"><img src="images/y2.jpg" align="right">
<div class="blok">Registration<br>
<img src="images/line1.jpg" class="line" width="300" height="2"><br>
<H2 style="display:inline;">REGISTRATION STEP 1</H2>
<H2 style="display:inline;">&nbsp;</H2>
<BR>
<BR>
Setting up an account is fast and simple. </div></td>
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