<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) ) {
$error = "No input was given";
}
else
{
// Define $username and $password
$username=$_POST['username'];

echo $username;

// $password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "", "cricket");

if($connection)
{
	echo "done....";
}

$sql = "select * from matches where  match_name='$username';";

$query = mysqli_query($connection,$sql);
$rows=mysqli_num_rows($query);

echo $rows;

if ($rows == 1) {
	echo "success";
$_SESSION['match_namess']=$username; // Initializing Session
header("location: profile.php"); // Redirecting To Other Page
 } else {
$error = "Wrong Input, Please enter valid details!";
}
mysqli_close($connection); // Closing Connection
}
}
?>
