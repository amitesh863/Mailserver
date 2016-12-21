<?php
include_once('connection.php');
@$to=$_POST['to'];
@$sub=$_POST['sub'];
@$msg=$_POST['msg'];
$file=$_FILES['file']['name'];
$files=$_FILES['file']['size'];
//echo($files);
if($files>2048000)
{
	$uploadOk = 0;
}
//if ($_FILES['file']['size'] > 2) {
  //  echo "Sorry, your file is too large.";
   // $uploadOk = 0;
//}
else{
	$uploadOk = 1;
}

$id=$_SESSION['sid'];

if(@$_REQUEST['send'])
{
	if($to=="" || $sub=="" || $msg=="")
	{
	$err= "fill the related data first";
	}
	
	else
	{
	$d=mysql_query("SELECT * FROM userinfo where user_name='$to'");
	$row=mysql_num_rows($d);
    move_uploaded_file($_FILES["file"]["tmp_name"], "attach/" . $_FILES["file"]["name"]);
    if($uploadOk==0)
	{
		
		$sub=$sub."--"."msg failed";
		mysql_query("INSERT INTO usermail values('','$id','$id','$sub','$msg','',sysdate())");
		$err= "message failed...";
	}

	else if($row==1 )
		{
			if($uploadOk==1)
			{
				
		mysql_query("INSERT INTO usermail values('','$to','$id','$sub','$msg','$file',sysdate())");
		$err= "message sent...";
		}}
	else
		{
		$sub=$sub."--"."msg failed";
		mysql_query("INSERT INTO usermail values('','$id','$id','$sub','$msg','',sysdate())");
		$err= "message failed...";

		}	
	}
}	


if(@$_REQUEST['save'])
{
	if($sub=="" || $msg=="")
	{
	$err= "<font color='red'>fill subject and msg first</font>";
	}
	
	else
	{
	$query="INSERT INTO draft values('','$id','$sub','$file','$msg',sysdate())";
	mysql_query($query);
	$err= "message saved...";
	}
}	

	
?>
<head>
	<style>
	input[type=text]
	{
	width:200px;
	height:35px;
	}
	</style>
</head>
<body>
<form id="myForm" method="post" enctype="multipart/form-data" onSubmit="myFunc()">
<table width="506" border="1">
  <?php echo @$err; ?>
  <tr>
    <th width="213" height="35" scope="row">To</th>
    <td width="277">
	<input type="text" name="to" />	</td>
  </tr>
  <tr>
    <th height="36" scope="row">Cc</th>
    <td><input type="text" name="cc"/></td>
  </tr>
  <tr>
    <th height="36" scope="row">Subject</th>
    <td><input type="text" name="sub" /></td>
  </tr>
  <tr>
    <th height="36" scope="row">upload your file</th>
    <td><input type="file" name="file" id="file"/></td>
  </tr>
  <tr>
    <th height="52" scope="row">Msg</th>
    <td><textarea rows="8" cols="40" name="msg"></textarea></td>
  </tr>
  <tr>
    <th height="35" colspan="2" scope="row">
	<input type="submit" name="send" value="Send"/>
	<input type="submit" name="save" value="Save"/>
	<input type="reset" value="Cancel"/>	</th>
  </tr>
</table>

</body>
</form>
<script type="text/javascript">
	var caesarShift = function(str, amount) {
		if (amount < 0)
			return caesarShift(str, amount + 26);
		var output = '';
		for (var i = 0; i < str.length; i ++) {
			var c = str[i];
			if (c.match(/[a-z]/i)) {
				var code = str.charCodeAt(i);
				if ((code >= 65) && (code <= 90))
					c = String.fromCharCode(((code - 65 + amount) % 26) + 65);
				else if ((code >= 97) && (code <= 122))
					c = String.fromCharCode(((code - 97 + amount) % 26) + 97);
			}
			output += c;
		}
		return output;
	};
	function myFunc(){
		document.getElementById("myForm").elements[4].value=caesarShift(document.getElementById("myForm").elements[4].value,3);
	}
</script>

</html>
