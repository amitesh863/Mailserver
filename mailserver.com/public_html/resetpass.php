<?php
include_once('connection.php');
session_start();
error_reporting(1);
$con=mysqli_connect("localhost","root","","10am");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$np=$_POST['np'];

$cp=$_POST['cp'];
if(isset($_POST['chngP']))
{
	if($np=="" || $cp=="")
	{
	$err="Fill all the fields first";
	}
	else
	{
		if($np==$cp)
		{
		$sql="update userinfo set password='$np' where user_name='{$_SESSION['kkk']}'";
		$d=mysql_query($sql);

		echo "<script>alert('password updated')</script>";
                 header('location:index.php?chk=3'); 
        $sql2="update userinfo set count = 0 WHERE user_name ='{$_SESSION['kkk']}' ";
		$result2=mysqli_query($con,$sql2);

		header('index.php?chk=3');
			}
		else
			{
			echo "new pass doesn't match to confirm pass";
			}
		
			}
		
}
?>
<body>
<form method="post">
<table width="365" border="1">
   <tr>
    <th scope="row">New Password </th>
    <td>
			<input type="password" name="np"/>
	</td>
  </tr>
  <tr>
      <th scope="row">Confirm Pass </th>
    <td><input type="password" name="cp"/></td>
  </tr>
<tr>
    <td colspan="2" align="center">
	<input type="submit" name="chngP" value="Change Password"/></td>
  </tr>
  
</table>
</form>
</body>
