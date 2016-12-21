
<?php
session_start();
include_once('connection.php');

error_reporting(1);
$con=mysqli_connect("localhost","root","","10am");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$r=mysql_query("select * from userinfo where user_name='{$_SESSION['kkk']}'");	
	$row=mysql_fetch_object($r);
    $file=$row->squestion;
    $adf=$row->sanswer;
 if($row->scount<3)   
 echo "<html><h5>YOU HAVE CROSSED THE LIMIT FOR MAXIMUM PASSWORD ATTEMPTS.PLEASE ANSWER THE SECURITY QUESTION TO RESET YOUR PASSWORD</h5></html>";   
if(isset($_POST['sans']))
{
     if($_POST['ans']==$adf) 
     { 		if($row->scount<3){
     	$sql2="update userinfo set scount = 0 WHERE user_name ='{$_SESSION['kkk']}' ";
		$result2=mysqli_query($con,$sql2);
        header('location:index.php?chk=9');  
     }
		else
		 echo "<html><h2>YOU HAVE BEEN BLOCKED.PLEASE CONTACT THE SYSTEM ADMINISTRATOR</h2></html>";

}
    else{ if($row->scount<3){
        echo "incorrect answer.try again";
    	$sql1="update userinfo set scount = scount+1 WHERE user_name ='{$_SESSION['kkk']}' ";
		$result=mysqli_query($con,$sql1);
    }
   else
		 echo "<html><h2>YOU HAVE BEEN BLOCKED.PLEASE CONTACT THE SYSTEM ADMINISTRATOR</h2></html>";
}

}

?>
<form method="post" enctype="multipart/form-data">

<table width="438" border="3" align="center">

  <font color="#FF0000"><?php echo $err; ?></font>

  <tr>

    <td width="204" height="47">Your security question: </td>

    <td width="218"><?php  if($file=="nsl"){echo "Enter nearest sibling's location";}
    if($file=="fs"){ echo "enter favorite song";}
    if($file=="ls"){ echo "enter last name of the teacher who had an impact on you";}  ?></td>

  </tr>

  <tr>

    <td height="39">Answer: </td>

    <td><input type="text" name="ans"/></td>

  </tr>

  <tr>
    <th colspan="2" scope="row">
	<input type="submit" value="Submit" name="sans"/>
	</th>
	</tr>

</table>

</form>
