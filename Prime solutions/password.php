
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <label>
  <input name="text" type="text" id="text" />
  </label>
  <input name="pass" type="submit" id="pass" value="Submit" />
</form>

</body>
</html>
<?php

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



$ppw=pw(5,2);
if(isset($_POST['pass']))
{
echo $ppw;
}

?>
