<?php
session_start();

$con=mysqli_connect("localhost","root","","10am");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if(isset($_POST['signin']))
{
	if($_POST['id']=="" || $_POST['pwd']=="")
	{
	$err="fill your id and password first";
	}
	else
	{
		$i1d=$_POST['id'];
	$d=mysqli_query($con,"SELECT * FROM userinfo where user_name='$i1d'; ");

	//mysql_query("select * from userinfo");
	$row=mysqli_fetch_object($d);

      if($row->count<3){
       if($row->scount<3)
      	{

		$fid=$row->user_name;
		$fpass=$row->password;

		if($fid==$_POST['id'] && $fpass==$_POST['pwd'])
		{
		$_SESSION['sid']=$_POST['id'];
		$sql2="update userinfo set count = 0 WHERE user_name ='$i1d' ";
		$result2=mysqli_query($con,$sql2);
		header('location:HomePage.php?chk=inbox');
		}
		else
		{
		$i1d1=$_POST['id'];
		$sql="SELECT * FROM userinfo where user_name='$i1d1'";
	   $result=mysqli_query($con,$sql);
	   $count1=mysqli_num_rows($result);
	   
	// If result matched $myusername and $mypassword, table row must be 1 row
	if($count1 == 1){
		$err="invalid pass";
		$sql1="update userinfo set count = count+1 WHERE user_name ='$i1d' ";
		$result=mysqli_query($con,$sql1);

	}
	else{

        $err="invalid id";
    }

		}}
    else {
		echo "<html><h2>YOU HAVE BEEN BLOCKED.PLEASE CONTACT THE SYSTEM ADMINISTRATOR</h2></html>";
		}
	}
		else
		{
		if($row->scount<3){

        $fid1=$row->user_name;
		$_SESSION['kkk'] = $fid1;
		header('location:index.php?chk=8');}
		else {
		echo "<html><h2>YOU HAVE BEEN BLOCKED.PLEASE CONTACT THE SYSTEM ADMINISTRATOR</h2></html>";
		}

         
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
	<input type="submit" value="LOG IN" name="signin"/>
	<a href="index.php?chk=4">Sign Up</a>
	</th>
  </tr>
</table>
</form>
