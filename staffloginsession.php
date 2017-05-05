<?php 
// Establishing Connection with Server by passing server_name, user_id and password as a parameter 
$connection = mysql_connect("mysql8.000webhost.com", "a8355418_hostel1", "hariharan@1"); 
// Selecting Database 
$db = mysql_select_db("a8355418_hostel1", $connection); 
session_start();// Starting Session 
// Storing Session 
$user_check=$_SESSION['SESS_MEMBER_ID']; 
// SQL Query To Fetch Complete Information Of User 

$ses_sql=mysql_query("select * from employee where login_id='$user_check'", $connection); 
$row = mysql_fetch_assoc($ses_sql); 
$emp_no =$row['emp_name']; 

if(!isset($emp_no)){ 
mysql_close($connection); // Closing Connection 
header('Location:staff login.php'); // Redirecting To Home Page 
} 
 
?> 