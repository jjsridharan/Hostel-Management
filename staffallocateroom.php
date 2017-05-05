<html>
<head>
<title>
HOSTEL MANAGEMENT SERVER
</title>

</head>
<script type="text/javascript">
function validateForm()
{
var a=document.forms["reg"]["name"].value;
var b=document.forms["reg"]["father_name"].value;
var c=document.forms["reg"]["gender"].value;
var d=document.forms["reg"]["rollno"].value;
var e=document.forms["reg"]["roomno"].value;
var f=document.forms["reg"]["address"].value;
var h=document.forms["reg"]["parents_no"].value;
if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f==""))
  {
  alert("All Field must be entered");
  return false;
  }
if (a==null || a=="")
  {
  alert("Name must be entered");
  return false;
  }
if (b==null || b=="")
  {
  alert("Father's name must be entered");
  return false;
  }
if (c==null || c=="")
  {
  alert("Gender must be entered");
  return false;
  }
if (d==null || d=="")
  {
  alert("Registration Number must be entered");
  return false;
  }
if (e==null || e=="")
  {
  alert("Room No. must be entered");
  return false;
  }
if (f==null || f=="")
  {
  alert("Address must be entered");
  return false;
  }
if (g==null || g=="")
  {
  alert("Parents number must be entered");
  return false;
  }
if (h==null || h=="")
  {
  alert("password must be entered");
  return false;
  }
}
</script>
<style>
h1{
     text-align:center ;
	color: white;
}
h2{
     text-align:center ;
	color: white;
}
h3{
     text-align:center ;
	color: white;
}
</style>
<body background ="images\34133-colorful-wallpaper-wallpapers-background-web-design-stunning_1440x900.jpg">

<center><img src="images\hostelmanagementserver.png"></center>
<br>
<h1>
BLOCKS
</h1>
<h2>
<?php
$servername = "mysql8.000webhost.com";
$username = "a8355418_hostel1";
$password = "hariharan@1";
$dbname = "a8355418_hostel1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
$sql1 = "SELECT block_id,block_name,gender from blocks";
$x = $conn->query($sql1);

if ($x->num_rows > 0) {
     // output data of each row
     while($row1 = $x->fetch_assoc()) {
         echo "<br>Block ID :". $row1["block_id"];
	      echo"<br>";
		  echo "Block Name :". $row1["block_name"];
		  echo "<br>";
		  echo "Gender  :". $row1["gender"];
		  echo "<br>";
     }
} else {
     echo "0 results";
}
echo "<br><br>";
echo " THE AVAILABLE BLOCKS ARE";
echo "<br><br>";
$sql = "SELECT * from room where status ='Unoccupied'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br>Block ID :". $row["block_id"];
		echo "                                                                    ";
		  echo "Room No :". $row["room_no"];
     }
} else {
     echo "0 results";
}

$conn->close();
?>  
</h2>

<form name="reg" action="roomallocate_exec.php" onsubmit="return validateForm()" method="post">
<table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
<tr>
<td colspan="2">
<div align="center">
 <?php 
		?>	
	    </div></td>
  </tr>
  
  <tr>
    <td width="95"><div align="right"><h3> Name:</h3></div></td>
    <td width="171"><input type="text" name="name" /></td>
  </tr>
 
  <tr>
    <td><div align="right"><h3>Gender:</h3></div></td>
    <td><input type="text" name="gender" /></td>
  </tr>
  <tr>
    <td><div align="right"><h3>Registration number:</h3></div></td>
    <td><input type="text" name="rollno" /></td>
  </tr>
    
 <tr>
    <td><div align="right"><h3>Password<h3></div></td>
    <td><input type="password" name="password" /></td>
  </tr>
 <tr>
    <td><div align="right"><h3>Course ID:</h3></div></td>
    <td><input type="text" name="courseid" /></td>
  </tr>
  <tr>
    <td><div align="right"><h3>Year:</h3></div></td>
    <td><input type="text" name="Year" /></td>
  </tr>
  <tr>
    <td><div align="right"><h3>DOB:</h3></div></td>
    <td><input type="text" name="dob" /></td>
  </tr>
  <tr>
    <td><div align="right"><h3>Address:</h3></div></td>
    <td><input type="text" name="address" /></td>
  </tr>
  <tr>
    <td><div align="right"><h3>Father's Name:</h3></div></td>
    <td><input type="text" name="father_name" /></td>
  </tr>
  <tr>
    <td><div align="right"><h3>Mother's Name:</h3></div></td>
    <td><input type="text" name="mother_name" /></td>
  </tr>
  <tr>
    <td><div align="right"><h3>Blood Group:</h3></div></td>
    <td><input type="text" name="blood_group" /></td>
  </tr>
  <tr>
    <td><div align="right"><h3>Parents No.:</h3></div></td>
    <td><input type="text" name="parents_no" /></td>
  </tr>
  <tr>
    <td><div align="right"><h3>Personal No.:</h3></div></td>
    <td><input type="text" name="contact_no" ></td>
  </tr>
   <tr>
    <td><div align="right"><h3>Room No.:</h3></div></td>
    <td><input type="text" name="room_no" /></td>
  </tr>
    
  <tr>
    <td><div align="right"></div></td>
    <td><input name="submit" type="submit" value="Submit" /></td>
  </tr>
  
</table>
</form>

</body>
</html>