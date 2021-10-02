<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: cric.php"); // Redirecting To Home Page
}
?>