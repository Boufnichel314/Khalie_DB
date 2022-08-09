<?php 
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
else
{
    session_destroy();
    session_start(); 
}
$host = "localhost"; /* Host name */$user = "root"; /* User */$password = ""; /* Password */$dbname = "khalie_ahl_fes"; /* Database name */
$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
die("Connection failed: " . mysqli_connect_error());
}
?>