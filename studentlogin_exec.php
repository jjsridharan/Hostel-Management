<?php
	//Start session
	session_start();
 
	//Include database connection details
	require_once('databaseconnection.php');
 
	//Array to store validation errors
	$errmsg_arr = array();
 
	//Validation error flag
	$errflag = false;
 
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
 
	//Sanitize the POST values
	$username = clean($_POST['username']);
	$password = clean($_POST['password']);
 
	//Input Validations
	if($username == '') {
		$errmsg_arr[] = '<font size=5 color ="white">Please enter the Registration number!!</font>';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = '<font size=5 color ="white">Please enter the Password!!</font>';
		$errflag = true;
	}
 
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location:student login.php");
		exit();
	}
 
	//Create query
	$qry="SELECT * FROM student WHERE rollno='$username' AND password='$password'";
	$result=mysql_query($qry);
 
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['rollno'];
			$_SESSION['SESS_FIRST_NAME'] = $member['name'];
			$_SESSION['SESS_LAST_NAME'] = $member['password'];
			session_write_close();
			header("location: studentdisplay.php");
			exit();
		}else {
			//Login failed
			$errmsg_arr[] = '<font size=5 color ="white">Invalid Registration number or Password </font>';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: student login.php");
				exit();
			}
		}
	}else {
		die("Query failed");
	}
?>