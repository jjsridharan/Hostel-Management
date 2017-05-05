<?php
	//Start session
	session_start();	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<html>
<head>
<title>
HOSTEL MANAGEMENT SERVER
</title>
</head>
<body background ="images\34133-colorful-wallpaper-wallpapers-background-web-design-stunning_1440x900.jpg">
<h1 >
<center><img src="images\hostelmanagementserver.png"></center><br>
</h1>
<center><h2><font color="white">STUDENT LOGIN</font></h2></center>
<br> 
<br> 
<br> 
<br> 
<br> 
<form name="loginform" action="studentlogin_exec.php" method="post">
<table width="309" border="0" align="center" cellpadding="2" cellspacing="5">
  <tr>
    <td colspan="2">
		<!--the code bellow is used to display the message of the input validation-->
		 <?php
			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
			echo '<ul class="err">';
			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
				echo '<li>',$msg,'</li>'; 
				}
			echo '</ul>';
			unset($_SESSION['ERRMSG_ARR']);
			}
		?>
	</td>
  </tr>
  <tr>
    <td width="116"><div align="right"><font color ="white"><strong>REGISTRATION NUMBER</strong></font></div></td>
    <td width="177"><input name="username" type="text" /></td>
  </tr>
  <tr>
    <td><div align="right"><font color ="white"><strong>PASSWORD</strong></font></div></td>
    <td><input name="password" type="password" /></td>
  </tr>
  <tr>
    <td><div align="right"></div></td>
    <td><input name="" type="submit" value="Login" /></td>
  </tr>
</table>
</form>

</body>
</html>
