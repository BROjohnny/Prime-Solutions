<?php include_once("config.php"); ?>
<?php

if(empty($_SESSION['email'])){ 
header("Location:home.php");}?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>NewsFlash - Subscribes</title>
<meta http-equiv="Content-Style-Type" content="text/css">
<LINK HREF="style.css" TYPE="text/css" REL="stylesheet">
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
       <p><span class="name">New Subscription </span><br>
             <img src="images/line.jpg" class="line" width="620" height="2"><br>
         </p>
		 <form name="form1" method="post" action="">
       <table width="370">
       <tbody>
         <tr>
           <td align="right">Full Name : </td>
           <td>
             <label>
               <input type="text" name="textfield">
               </label>
         
           </td>
         </tr>
         <tr>
           <td width="87" align="right">Newspaper : </td>
           <td width="271"><select name="select">
             <option>The New York Times</option>
             <option>Hindustan Times</option>
             <option>USA Today</option>
             <option>Daily Mail</option>
             <option>Daily Mirror</option>
             <option>The Economist Times</option>
             <option>The Sun</option>
             <option selected>None</option>
           </select>             &nbsp;</td>
         </tr>
         <tr>
           <td align="right">Magazine :</td>
           <td><select name="select3">
                <option>The Economist</option>
                <option>Brides of Srilanka</option>
                <option>Vogue</option>
                <option>InStyle</option>
                <option>BusinessWeek</option>
                <option>CookingLight</option>
                <option>People</option>
                <option selected>None</option>
              </select>                &nbsp;&nbsp;</td>
         </tr>
         <tr>
           <td align="right">Days : </td>
           <td><label></label>         
             <label>
               <input type="checkbox" name="checkbox" value="checkbox">
               </label>
             Monday  
               <label> <br>
               <input type="checkbox" name="checkbox2" value="checkbox">
                 </label>
               Tuesday
               
                 <label><br>
                   <input type="checkbox" name="checkbox3" value="checkbox">
                   </label>
				   Wednesday
				   <label><br>
               <input type="checkbox" name="checkbox" value="checkbox">
               </label>
			   Thursday
			   <label><br>
               <input type="checkbox" name="checkbox" value="checkbox">
               </label>
             Friday
			 <label><br>
               <input type="checkbox" name="checkbox" value="checkbox">
               </label>
             Saturday
			 <label><br>
               <input type="checkbox" name="checkbox" value="checkbox">
               </label>
             Sunday
         
             &nbsp;</td>
         </tr>
         <tr>
           <td align="right">Sarting Date : </td>
           <td>
             <label>
               <select name="select2">
			   
                      <option>None</option>
                      <option>01</option>
                      <option>02</option>
                      <option>03</option>
                      <option>04</option>
                      <option>05</option>
                      <option>06</option>
                      <option>07</option>
                      <option>08</option>
                      <option>09</option>
                      <option>10</option>
                      <option>11</option>
                      <option>12</option>
                      <option>13</option>
                      <option>14</option>
                      <option>15</option>
                      <option>16</option>
                      <option>17</option>
                      <option>18</option>
                      <option>19</option>
                      <option>20</option>
                      <option>21</option>
                      <option>22</option>
                      <option>23</option>
                      <option>24</option>
                      <option>25</option>
                      <option>26</option>
                      <option>27</option>
                      <option>28</option>
                      <option>29</option>
                      <option>30</option>
                      <option>31</option>
               </select>
               </label> 
			   <select name="select3">
                      <option selected="selected">None</option>
                      <option>January</option>
                      <option>February</option>
                      <option>March</option>
                      <option>April</option>
                      <option>May</option>
                      <option>June</option>
                      <option>July</option>
                      <option>Auguest</option>
                      <option>September</option>
                      <option>October</option>
                      <option>November</option>
                      <option>December</option>
                    </select>       
					<select name="select4">
                      <option>None</option>
                      <option>1980</option>
                      <option>1981</option>
                      <option>1982</option>
                      <option>1983</option>
                      <option>1984</option>
                      <option>1985</option>
                      <option>1986</option>
                      <option>1987</option>
                      <option>1988</option>
                      <option>1989</option>
                      <option>1990</option>
                      <option>1991</option>
                      <option>1992</option>
                      <option>1993</option>
                      <option>1994</option>
                      <option>1995</option>
                      <option>1996</option>
                      <option>1997</option>
                      <option>1998</option>
                      <option>2000</option>
                      <option>2001</option>
                      <option>2002</option>
                      <option>2003</option>
                      <option>2004</option>
                      <option>2005</option>
                      <option>2006</option>
                      <option>2009</option>
                      <option>2010</option>
                      <option>2011</option>
                      <option>2012</option>
                      <option>2013</option>
                      <option>2014</option>
                    </select>   </td>
         </tr>
         <tr>
           <td align="right">No of Months </td>
           <td>
             <label>
               <input type="text" name="textfield3">
               </label>           </td>
         </tr>
         <tr>
           <td colspan="2">&nbsp;</td>
         </tr>
         <tr>
           <td colspan="2" > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;           
               <label></label>
             <input name="submit" type="submit" style="padding:0px 10px;" value="Submit">
             <input type="submit" name="Submit" value="Cancle"></td>
         </tr>
         <tr>
           <td align="left" colspan="2">&nbsp;</td>
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
Account Information<BR>
<BR>
Setting up an account is fast and simple. In a few steps you&rsquo;re ready to take full advantage of the online subscription services: <BR>
<BR>
<UL>
  <LI>Make payments</LI>
  <LI>Start a new subscription</LI>
  <LI>Setup vacation holds</LI>
  <LI>Access the e-edition (digital newspaper)</LI>
  <LI>Submit delivery problems</LI>
  <LI>Manage your subscriptions online</LI>
</UL>
</div>	</td>
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