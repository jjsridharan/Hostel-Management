<?php 
// Establishing Connection with Server by passing server_name, user_id and password as a parameter 
$connection = mysql_connect("mysql8.000webhost.com", "a8355418_hostel1", "hariharan@1"); 
// Selecting Database 
$db = mysql_select_db("a8355418_hostel1", $connection); 
session_start();// Starting Session 
// Storing Session 
$user_check=$_SESSION['SESS_MEMBER_ID']; 
// SQL Query To Fetch Complete Information Of User 

$ses_sql=mysql_query("select * from student where rollno='$user_check'", $connection); 
$row = mysql_fetch_assoc($ses_sql); 
$roll_no =$row['rollno']; 
$seq_sql=mysql_query("select course_name from course where course_id=(select courseid from student where rollno='$user_check')", $connection);
$x=mysql_fetch_assoc($seq_sql);
$coursename=$x['course_name'];
$hos_sql=mysql_query("select block_name from blocks where block_id=(select block_id from block_allotment where course_id=(select courseid from student where rollno='$user_check'))", $connection);
$y=mysql_fetch_assoc($hos_sql);
$hostel=$y['block_name'];
$roomno_sql=mysql_query("select room_no from room where block_id=(select block_id from block_allotment where course_id=(select courseid from student where rollno='$user_check'))", $connection);
$z=mysql_fetch_assoc($roomno_sql);
$roomno=$z['room_no'];
$warden_sql=mysql_query("select emp_name from employee where block_id=(select block_id from block_allotment where course_id=(select courseid from student where rollno='$user_check'))", $connection);
$a=mysql_fetch_assoc($warden_sql);
$wardenname=$a['emp_name'];
$messbil_sql=mysql_query("select * from messcard where rollno='$user_check'", $connection);
$b=mysql_fetch_assoc($messbil_sql);
$messb=$b['Mess_Bill'];
$hostelbill_sql=mysql_query("select Fees from blocks where course_id=(select courseid from student where rollno='$user_check')", $connection);
$c=mysql_fetch_assoc($hostelbill_sql);
$hostelbill=$c['Fees'];
$startdata=$b['start_date'];
$end_date=$b['enddate'];
if(!isset($roll_no)){ 
mysql_close($connection); // Closing Connection 
header('Location:student login.php'); // Redirecting To Home Page 
} 
 
?> 