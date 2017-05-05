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
    $Rollno = clean($_POST['Rollno']);
	
  	//Input Validations
	if($Rollno == '') {
		$errmsg_arr[] = '<font size=5 color="white">Please enter the registration number !!</font>';
		$errflag = true;
	}
	
 
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: viewstudentdata.php");
		exit();
	}
 
	//Create query
	$qry="SELECT * FROM student WHERE rollno='$Rollno'";
	$result=mysql_query($qry);
 
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['rollno'];
			$_SESSION['SESS_FIRST_NAME'] = $member['name'];
			session_write_close();
			header("location: staffstudentview.php");
			exit();
		}else {
			//Login failed
			$errmsg_arr[] = '<font size=5 color="white">Sorry, the entered registration number was not found !!</font>';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location:viewstudentdata.php");
				exit();
			}
		}
	}else {
		die("Query failed");
	}
?>
