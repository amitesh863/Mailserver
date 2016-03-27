<?php
$user='root';
$pass='';
$db='rgitusers';
//$db=new mysqli('localhost',$user,$pass,$db)or die("Unable to connect");
$conn = new mysqli('localhost',$user,$pass,$db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
session_start();
$id=$_SESSION["username"];
$result3 = mysqli_query($conn,"SELECT * FROM students where username='$id'");
while($row3 = mysqli_fetch_array($result3,MYSQLI_ASSOC))
{ 
$fname=$row3['fname'];
$lname=$row3['lname'];
$address=$row3['address'];
$contact=$row3['contact'];
$picture=$row3['picture'];
$gender=$row3['gender'];
$dob=$row3['DOB'];
$branch=$row3['branch'];
$email=$row3['email'];
$status=$row3['Status'];


}
?>
<table width="398" border="0" align="center" cellpadding="0">
  <tr>
    <td height="26" colspan="2">Your Profile Information </td>
    <td height="26" ><a href="http://localhost/profedit.php"><button type="button">Edit Profile</button></a>
 </td>
	<td><div align="right"><a href="login1.php">logout</a></div></td>
  </tr>
  <tr>
    <td width="129" rowspan="5"><img src="<?php echo $picture ?>" width="129" height="129" alt="no image found"/></td>
    <td width="82" valign="top"><div align="left">FirstName:</div></td>
    <td width="165" valign="top"><?php echo $fname ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">LastName:</div></td>
    <td valign="top"><?php echo $lname ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Gender:</div></td>
    <td valign="top"><?php echo $gender ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Address:</div></td>
    <td valign="top"><?php echo $address ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Contact No.: </div></td>
    <td valign="top"><?php echo $contact ?></td>
  </tr>
   <tr>
    <td valign="top"><div align="left">Date Of Birth: </div></td>
    <td valign="top"><?php echo $dob ?></td>
  </tr>
   <tr>
    <td valign="top"><div align="left">Branch: </div></td>
    <td valign="top"><?php echo $branch ?></td>
  </tr>
   <tr>
    <td valign="top"><div align="left">Email: </div></td>
    <td valign="top"><?php echo $email ?></td>
  </tr>
   <tr>
    <td valign="top"><div align="left">Status: </div></td>
    <td valign="top"><?php echo $status ?></td>
  </tr>
</table>
<p align="center"><a href="login1.php"></a></p>