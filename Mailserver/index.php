<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>My mail server</title>
<script language="JavaScript1.1">
		<!--

		/*
		JavaScript Image slideshow:
		By JavaScript Kit (www.javascriptkit.com)
		Over 200+ free JavaScript here!
		*/

		var slideimages=new Array()
		var slidelinks=new Array()
		function slideshowimages(){
				}

		function slideshowlinks(){
		for (i=0;i<slideshowlinks.arguments.length;i++)
		slidelinks[i]=slideshowlinks.arguments[i]
		}

		function gotoshow(){
		if (!window.winslide||winslide.closed)
		winslide=window.open(slidelinks[whichlink])
		else
		winslide.location=slidelinks[whichlink]
		winslide.focus()
		}

		//-->
		</script>
		<style>
			a:hover{color:#00FF66;}
			a{font-size:18px;margin-left:5%;}
		</style>
</head>

<body>
<div id="mainbody" style="border:5px groove pink;">
<table width="975" border="1" align="center" style="background-image:url('slide image/bkgrnd_greydots.png');">
  <tr>
    <td height="135" colspan="2">
	<img src="food1.jpg" name="slide" border="0" width="100%" height="200">
	<script>
	<!--
	//configure the paths of the images, plus corresponding target links
	slideshowimages("slide image/food1.png","slide image/food2.png","slide image/food3.png","slide image/food4.png")
	slideshowlinks("http://food.epicurious.com/run/recipe/view?id=13285","http://food.epicurious.com/run/recipe/view?id=10092","http://food.epicurious.com/run/recipe/view?id=100975","http://food.epicurious.com/run/recipe/view?id=2876","http://food.epicurious.com/run/recipe/view?id=20010")

	//configure the speed of the slideshow, in miliseconds
	var slideshowspeed=2000

	var whichlink=0
	var whichimage=0
	function slideit(){
	if (!document.images)
	return
	document.images.slide.src=slideimages[whichimage].src
	whichlink=whichimage
	if (whichimage<slideimages.length-1)
	whichimage++
	else
	whichimage=0
	setTimeout("slideit()",slideshowspeed)
	}
	slideit()

	//-->
</script>	</td>
  </tr>
  <tr>
    <td height="38" colspan="2">
		<a href="index.php">HOME</a>
		<a href="index.php?chk=2">ABOUT US</a>
		<a href="index.php?chk=3">LOGIN</a>
		<a href="index.php?chk=4">NEW USER?</a>
  </tr>
  <tr>
    <td height="613">
	
	<?php
	@$chk=$_REQUEST['chk'];
	if($chk=="")
	{
	?>
	<h3 align="center">Welcome to ATY mail server..........</h3>
	<pre>
	
mail server

 
	</pre>
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
	if($chk=="7")
	{
	include_once('latestupdDisp.php');
	}
	
	
	?>	</td>
  
  </tr>

</table>
</div>
</body>
</html>
