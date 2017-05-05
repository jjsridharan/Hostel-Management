<?php
session_start();
include('databaseconnection.php');
$fname=$_POST['Student_First_Name'];
$lname=$_POST['Student_Last_Name'];
$mname=$_POST['Gender'];
$address=$_POST['Address'];
$contact=$_POST['Landline'];
$username=$_POST['Student_ID'];
$password=$_POST['Password'];
$cid=$_POST['Course_ID'];
$sem=$_POST['Semester'];
$fan=$_POST['Father_Name'];
$mon=$_POST['Mother_Name'];
$bg=$_POST['Blood_Group'];
$dob=$_POST['DOB'];
$pno=$_POST['Personal_No'];
$hosds=$_POST['Hosteler_Days_Scholar'];
$camp=$_POST['Campus'];
mysql_query("INSERT INTO student(Student_First_Name, Student_Last_Name, Gender, Address, Landline, Student_ID, Password, Course_ID, Semester, Father_Name, Mother_Name, Blood_Group, DOB, Personal_No, Hosteler_Days_Scholar, Campus)VALUES('$fname', '$lname', '$mname', '$address', '$contact', '$username', '$password', '$cid', '$sem', '$fan', '$mon', '$bg', '$dob', '$pno',' $hosds', '$camp')");

header("location: index.php");
mysql_close($con);
?>

