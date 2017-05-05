<?php
include('staffloginsession.php'); 
?> 

<html>
<head>
<title>
HOSTEL MANAGEMENT SERVER
</title>
</head>
<style>
h1{
     text-align: left;
	color: white;
}
</style>
<body background ="images\34133-colorful-wallpaper-wallpapers-background-web-design-stunning_1440x900.jpg">
<h1 >
<center><img src="images\hostelmanagementserver.png"></center><br><br>
</h1>
<h1>Welcome : <?php echo $emp_no?> </h1>
<br>
<br>
<center>
<a href ="viewstudentdata.php">
<img src="images\cooltext139356971548207.png"> 
</a>
</center>
<br>
<br>
<center>
<a href ="staffallocateroom.php">
<img src="images\cooltext139357232739405.png">
</a>
</center>  
</body>
</html>
