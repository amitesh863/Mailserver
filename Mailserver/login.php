<?php
session_start();
error_reporting(1);
include_once('connection.php');
if(isset($_POST['signIn']))
{
	if($_POST['id']=="" || $_POST['pwd']=="")
	{
	$err="fill your id and passwrod first";
	}
	else
	{
	$d=mysql_query("SELECT * FROM userinfo where user_name='{$_POST['id']}'");
	$row=mysql_fetch_object($d);
		$fid=$row->user_name;
		$fpass=$row->password;
		if($fid==$_POST['id'] && $fpass==$_POST['pwd'])
		{
		$_SESSION['sid']=$_POST['id'];
		header('location:HomePage.php');
		}
		else
		{
		$err="invalid id or pass";
		}
	}
}
?>
<form method="post">
<table width="323" border="1">
  <tr>
  <font color="#FF0000"><?php echo $err; ?></font>
    <th width="171" scope="row">Enter your id </th>
    <td width="136">
		<input type="text" name="id" />
	</td>
  </tr>
  <tr>
    <th scope="row">Enter your password </th>
    <td>
			<input type="password" name="pwd"/>
	</td>
  </tr>
  <tr>
    <th colspan="2" scope="row">
	<input type="submit" value="SignIn" name="signIn"/>
	<a href="http://localhost/Mailserver/index.php?chk=4">SignUp</a>
	</th>
  </tr>
</table>
</form>