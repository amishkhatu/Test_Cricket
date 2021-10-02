<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "");
// Selecting Database
$db = mysqli_select_db($connection, "cricket");
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['match_namess'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($connection, "select * from matches where match_name='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['match_name'];
if(!isset($login_session)){
mysqli_close($connection); // Closing Connection
header('Location: cric.php'); // Redirecting To Home Page
}
?>
