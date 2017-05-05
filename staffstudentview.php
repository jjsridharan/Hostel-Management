<ht<?php 
include('staffstudentviewsession.php'); 
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

h3 {
    text-align: left;
	color: white;
}
</style>
<body background ="images\34133-colorful-wallpaper-wallpapers-background-web-design-stunning_1440x900.jpg">
<center><img src="images\hostelmanagementserver.png"></center><br><br>
  <br>
  <br>
<h3>
Full Name                     :<?php echo $row['name'];?>
</h3>
<h3>
Father's name              :<?php echo $row['father_name'];?>
 </h3>
 <h3>
Mother's name              :<?php echo $row['mother_name'];?>
</h3>
<h3>
Gender					 :<?php echo $row['gender'];?> 	
</h3>
<h3>
Blood Group               :<?php echo $row['blood_group'];?>
</h3>
<h3>
Course                   :<?php echo $x['course_name'];?>
</h3>
<h3>
Date of Birth(yyyy/mm/dd):<?php echo $row['dob'];?>
</h3>
<h3>
Year                     :<?php echo $row['Year'];?>
</h3>
<h3>
Address                  : <?php echo $row['address'];?>
</h3>
<h3>
Contact No               : <?php echo $row['contact_no'];?>
</h3>
<h3>
Parent's Contact No               : <?php echo $row['parents_no'];?>
</h3>
<h3>
Start date               :<?php echo $b['start_date'];?>
</h3>
<h3>
End date                 :<?php echo $b['enddate'];?>
</h3>
<h3>
Room no                  :<?php echo $z['room_no'];?>
</h3>
<h3>
Hostel Name              :<?php echo $y['block_name'];?>
</h3>
<h3>
Warden name              :<?php echo $a['emp_name'];?>
</h3>
<h3>
Hostel fees              :<?php echo $c['Fees']; ?>
</h3>
<h3>
Mess Fees (paid or not)  :<?php echo $b['Mess_Bill'];?>
</h3>
</body>
</html>