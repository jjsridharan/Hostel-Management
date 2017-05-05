<?php
session_start();
include('databaseconnection.php');
$name=$_POST['name'];
$fathername=$_POST['father_name'];
$mon=$_POST['mother_name'];
$mname=$_POST['gender'];
$year=$_POST['Year'];
$address=$_POST['address'];
$contact=$_POST['parents_no'];
$username=$_POST['rollno'];
$password=$_POST['password'];
$cid=$_POST['courseid'];
$bg=$_POST['blood_group'];
$dob=$_POST['dob'];
$pno=$_POST['contact_no'];
$roomno=$_POST['room_no'];
mysql_query("INSERT INTO student(name,father_name,mother_name,gender,Year,address,parents_no,rollno,password,courseid,blood_group,dob,contact_no)VALUES('$name','$fathername','$mon','$mname','$year','$address','$contact','$username','$password','$cid','$bg','$dob','$pno')");
mysql_query("UPDATE room SET status='Occupied' where room_no='$roomno'");
mysql_query("UPDATE student SET status='Enabled' where rollno='$username'");
header("location: staffallocateroom.php");
mysql_close($con);
?>

