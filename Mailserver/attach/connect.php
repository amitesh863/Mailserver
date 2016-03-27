<?php

$user='root';
$pass='';
$db='testdb1';
//$db=new mysqli('localhost',$user,$pass,$db)or die("Unable to connect");
$conn = new mysqli('localhost',$user,$pass,$db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$email = $_POST['email'];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  //$emailErr = "Invalid email format"; 
  echo "Invalid email format";
}
else{
$sql="Insert into Subscribers(users) VALUES('$email')";
$search = ("SELECT COUNT(*)as count1 FROM Subscribers WHERE users='$email'") ;
$result = mysqli_query($conn,$search);
$fd= $result->fetch_object()->count1;
if($fd[0]>0) {
   echo "You have already subscribed.";
} else {
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
}
$conn->close();
?>
