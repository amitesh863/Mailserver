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
$gender=$_POST['gender'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$pic=$_POST['pic'];
$mail=$_POST['email'];

mysqli_query($conn,"UPDATE students set gender='$gender' where username='$id'");
mysqli_query($conn,"UPDATE students set contact=$contact where username='$id'");
mysqli_query($conn,"UPDATE students set address='$address' where username='$id'");
mysqli_query($conn,"UPDATE students set picture='$pic' where username='$id'");
mysqli_query($conn,"UPDATE students set email='$mail' where username='$id'");

echo "success";

?>