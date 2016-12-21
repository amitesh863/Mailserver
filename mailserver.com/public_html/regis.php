<?php
session_start();

include_once('connection.php');
$con=mysqli_connect("localhost","root","","10am");
$imgpath="default2.jpg";
error_reporting(1);
$err="";
$y=$_POST['y'];

$m=$_POST['m'];

$d=$_POST['d'];

$dob=$y."-".$m."-".$d;

$hobbies=$_POST['ch'];


$imgpath=$_FILES['file']['name'];

$un=$_POST['un'];

if($_POST['reg'])

{

	if($_POST['un']=="" || $_POST['pwd']=="" || $_POST['ch']==""|| $_POST['ans']=="")

	{
    if($_POST['un']=="")
	$err=$err."username cannot be empty. ";
    if($_POST['pwd']=="")
	$err=$err."password cannot be empty. ";
   if($_POST['ch']==""|| $_POST['ans']=="")
	$err=$err."security question must be answered.";

	}

	else

	{

	$r=mysql_query("SELECT * FROM userinfo where user_name='{$_POST['un']}'");

	$t=mysql_num_rows($r);

		if($t==1)

		{

		$err="user already exists choose another";

		}

		else

		{

                if($imgpath=='') 
                $imgpath='default2.jpg';
		$sql2="INSERT INTO userinfo values('','{$_POST['un']}','{$_POST['pwd']}','{$_POST['mob']}','{$_POST['eid']}','{$_POST['gen']}','{$_POST['ch']}','{$_POST['ans']}','$dob','$imgpath',0,0)";
         $result2=mysqli_query($con,$sql2);
		mkdir("userImages/$un");

		move_uploaded_file($_FILES["file"]["tmp_name"], "userImages/$un/" . $_FILES["file"]["name"]);

		$_SESSION['sname']=$_POST['un'];

		header('location:index.php?chk=3');

		}

	}

}



?>

<form method="post" enctype="multipart/form-data">

<table width="438" border="5" align="center">

  <font color="#FF0000"><?php echo $err; ?></font>

  <tr>

    <td width="204" height="47">Enter Your User Name </td>

    <td width="218"><input type="text" name="un"/></td>

  </tr>

  <tr>

    <td height="39">Enter Your Password </td>

    <td><input type="password" name="pwd"/></td>

  </tr>

  <tr>

    <td height="47">Enter Your Mobile </td>

    <td><input type="text" name="mob"/></td>

  </tr>

  <tr>

    <td height="39">Enter Your Email </td>

    <td><input type="email" name="eid"/></td>

  </tr>

  <tr>

    <td height="33">Select Your Gender </td>

    <td>

		Male<input type="radio" name="gen" value="m"/>

		Female<input type="radio" name="gen" value="f"/>

	</td>

  </tr>

  <tr>

    <td height="41">Select Your security question type </td>

    <td>

		<input type="radio" name="ch" value="nsl"/>nearest sibling's location</br>

		<input type="radio" name="ch" value="fs"/>favorite song</br>

		<input type="radio" name="ch" value="ls"/>last name of the teacher who had an impact on you</br>

	</td>

  </tr>
  <tr>

    <td height="47">Enter Your answer for question selected </td>

    <td><input type="text" name="ans"/></td>

  </tr>

  <tr>

    <td height="38">Select Your DOB </td>

    <td>

		<select name="y">

			<option value="">Year</option>

			<?php

			for($i=1900;$i<=2013;$i++)

			{

			echo "<option value='$i'>$i</option>";

			}

			?>

		</select>

		<select name="m">

			<option value="">Month</option>

			<?php

			for($i=1;$i<=12;$i++)

			{

			echo "<option value='$i'>$i</option>";

			}

			?>

		</select>

		<select name="d">

			<option value="">Date</option>

			<?php

			for($i=1;$i<=31;$i++)

			{

			echo "<option value='$i'>$i</option>";

			}

			?>

		</select>

	</td>

  </tr>

  <tr>

    <td height="55">Profile Picture</td>

    <td>

	<input type="file" name="file"/>

	</td>

  </tr>

  

  

  <tr>

    <td align="center" colspan="2">

	<input type="submit" name="reg" value="Register"/>

	<input type="reset"  value="Reset"/>

	</td>

  </tr>

</table>

</form>
