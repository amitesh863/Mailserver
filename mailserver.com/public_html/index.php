<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>My mail server</title>

		<style>
			a:hover{color:#00ff66;}
			a{font-size:18px;margin-left:5%;}
		</style>
</head>

<body>
<div id="mainbody" style="border:5px groove pink;">
<table width="975" border="1" align="center" style="background-image:url('slide image/bkgrnd_greydots.png');">
  <tr>
    <td height="135" colspan="2">
	<img src="logo.png" name="slide" border="0" width="100%" height="200">
		</td>
  </tr>
  <tr>
    <td height="38" colspan="2">
		<a href="index.php">HOME</a>
		<a href="index.php?chk=2">ABOUT US</a>
		<a href="index.php?chk=3">LOGIN</a>
		<a href="index.php?chk=4">SIGN UP</a>
  </tr>
  <tr>
    <td height="613">
    <h1 align="center">Welcome to mail server</h1>
	
	<?php
	
	@$chk=$_REQUEST['chk'];
	if($chk=="")
	{
	?>
	

	<?php
	}
	if($chk==4)
	{
	include_once('regis.php');
	}
	if($chk==3)
	{
	include_once('login.php');
	}
	if($chk==5)
	{
	include_once('welcome.php');
	}
	if($chk==2)
	{
	include_once('aboutus.php');
	}
	if($chk=="6")
	{
	include_once('contactus.php');
	}
	if($chk=="8")
	{
	include_once('blocked.php');
	}
	if($chk=="9")
	{
	include_once('resetpass.php');
	}
	
	?>	</td>
  
  </tr>

</table>
</div>
</body>
</html>
